<!--
File: Manage Dashboard 
Authors: Ryan Tay
Date created: Sep 29 2025
Last modified: Oct 26 2025
Description: Landing page for administrator access users
-->

<?php
// Turn on error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

//This ensures only users with role = admin can access the Manage Dashboard.If someone tries typing manage.php in the URL, they'll get redirected to login.php
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'admin') { 
    header("Location: login.php");
    exit();
}

//Automatically logs out inactive users after 15 minutes.
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
$_SESSION['LAST_ACTIVITY'] = time();  //Keeps user logged in as long as they're active and not inactive for 15+ minutes


require_once("settings.php");
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    error_log("Database connection failed: " . mysqli_connect_error());   // Log the error privately instead of exposing sensitive details to users
    die("Sorry, something went wrong. Please try again later.");    // Show a generic error message to avoid leaking server/database details
}

function fetchTableData($conn, $tableName, $orderBy = "") {
    $data = [];
    $sql = "SELECT * FROM $tableName";
    if (!empty($orderBy)) {
        $sql .= " ORDER BY $orderBy";
    }
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "Query Failed: " . $sql;
    }
    return $data;
}

$main_query = 'eoi_id';
$other_query = 'eoi_id';

$tables = [
    'eoi_main' => fetchTableData($conn, 'eoi_main', $main_query),
    'eoi_location' => fetchTableData($conn, 'eoi_location', $other_query),
    'eoi_skill' => fetchTableData($conn, 'eoi_skill', 'skill_id'),
    'eoi_skill_selection' => fetchTableData($conn, 'eoi_skill_selection', $other_query)
];

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Delete EOIs by job reference
    if (isset($_POST['delete_job_reference']) && !empty($_POST['delete_job_reference'])) {
        //$job_ref = mysqli_real_escape_string($conn, $_POST['delete_job_reference']); 
        //$delete_sql = "DELETE FROM eoi_main WHERE ref_num = '$job_ref'";
        //mysqli_query($conn, $delete_sql);     REPLACED WITH LINE 77-80 TO PREVENT SQL INJECTION. REMOVE LINE 72-74 IF DONE

        //SQL statement to prevent SQL injection attacks
        $stmt = $conn->prepare("DELETE FROM eoi_main WHERE ref_num = ?");
        $stmt->bind_param("s", $_POST['delete_job_reference']);     //one ? for 's' or string, as ref_num is stored as varchar/text in db
        $stmt->execute();
        $stmt->close();
    }
    
    // Update EOI status
    if (isset($_POST['update_eoi_id']) && isset($_POST['update_status'])) {
        //$eoi_id = (int)$_POST['update_eoi_id'];
        //$status = mysqli_real_escape_string($conn, $_POST['update_status']);
        //$update_sql = "UPDATE eoi_main SET status = '$status' WHERE eoi_id = $eoi_id";
        //mysqli_query($conn, $update_sql);  REPLACED WITH LINE 91-94 TO PREVENT SQL INJECTION. REMOVE LINE 85-88 IF DONE

        //SQL statement to prevent SQL injection attacks
        $stmt = $conn->prepare("UPDATE eoi_main SET status = ? WHERE eoi_id = ?");
        $stmt->bind_param("si", $_POST['update_status'], $_POST['update_eoi_id']);   //two ?? for 'si'; 's' as status is stored as enum(mysql treats as string) and 'i' as eoi_id is stored as an interger 
        $stmt->execute();
        $stmt->close();
    }
}

// Build query based on list by selection
$query = "SELECT 
            m.*, 
            l.street_address, 
            l.suburb_town, 
            l.state, 
            l.postcode,
            GROUP_CONCAT(s.skill_name ORDER BY s.skill_name SEPARATOR ', ') as skills
        FROM eoi_main m
        LEFT JOIN eoi_location l ON m.eoi_id = l.eoi_id
        LEFT JOIN eoi_skill_selection ss ON m.eoi_id = ss.eoi_id
        LEFT JOIN eoi_skill s ON ss.skill_id = s.skill_id";

$where_clauses = [];

if (isset($_GET['list_by']) && isset($_GET['query_value']) && !empty($_GET['query_value'])) {
    $query_value = mysqli_real_escape_string($conn, $_GET['query_value']);
    
    switch ($_GET['list_by']) {
        case 'job_reference':
            $where_clauses[] = "m.ref_num LIKE '%$query_value%'";
            break;
        case 'first_name':
            $where_clauses[] = "m.first_name LIKE '%$query_value%'";
            break;
        case 'last_name':
            $where_clauses[] = "m.last_name LIKE '%$query_value%'";
            break;
        case 'first_and_last_name':
            $names = explode(' ', $query_value, 2);
            if (count($names) >= 2) {
                $first_name = mysqli_real_escape_string($conn, $names[0]);
                $last_name = mysqli_real_escape_string($conn, $names[1]);
                $where_clauses[] = "m.first_name LIKE '%$first_name%' AND m.last_name LIKE '%$last_name%'";
            }
            break;
    }
}

if (!empty($where_clauses)) {
    $query .= " WHERE " . implode(" AND ", $where_clauses);
}

$query .= " GROUP BY m.eoi_id";

// Handle sorting: list of safe column names users can sort by. it'll prevent hackers from injecting dangerous SQL in the URL
//$sort_field = isset($_GET['sort']) ? mysqli_real_escape_string($conn, $_GET['sort']) : 'm.eoi_id'; REPLACED WITH LINE 145-146 . Remove 144 if done
$allowed_sorts = ['m.eoi_id', 'm.email', 'm.ref_num', 'm.first_name', 'm.last_name', 'm.birth_date', 'm.gender', 'm.phone_num', 'm.other_skills', 'l.street_address', 'l.suburb_town', 'l.state', 'l.postcode', 'm.status'];
$sort_field = (isset($_GET['sort']) && in_array($_GET['sort'], $allowed_sorts)) ? $_GET['sort'] : 'm.eoi_id'; //check if requested sort column is in the allowed list. if not, use default m.eoi_id
$query .= " ORDER BY $sort_field";

$result = mysqli_query($conn, $query);
$eoi_data = [];
if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
        $eoi_data[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Administrator dashboard for managing Expressions of Interest (EOI) records, including viewing, updating, and deleting applicant data."> 
        <title>Manage EOI Records</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish a connection with google API -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"> <!-- Load Google icons -->
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <style>
            body {
            background-color: #020b16;         /* !! lira to do: CAN BE REMOVED LATEr IF DEBUGGING TEXT DOESNT CAUSE CONTRAST ERRor !!*/
            color: #fff; 
            font-family: 'Barlow', sans-serif;
            }
            main#manage-dashboard {
            max-width: 1100px;
            max-height: max-content;
            margin: 100px auto;
            padding: 80px 120px;
            background: linear-gradient(135deg,      /* !! lira to do: COLOURS TO BE CHANGED/UPDATED BEFORE DEADLINE !! */
                        #051225 0%,     
                        #1c4159 50%,   
                        #351c38 100%   );
            box-shadow:
            0 0 6px rgba(0, 200, 255, 0.3),
            0 0 15px rgba(217, 227, 234, 0.2),
            0 0 30px rgba(184, 194, 209, 0.15),
            0 0 60px rgba(0, 50, 255, 0.1);
            transform: translateY(-10px) scale(1.01);
            border-radius: 12px; }
            #manage-dashboard input:focus {
                outline: none;
                border-color: #4b7cff;
                box-shadow: 0 0 0 2px rgba(75, 124, 255, 0.3);
            }

            .dashboard-section {   /*!! TEAM TO DO: KEEP/REMOVE THIS WHICHEVER SUITS THE PAGE BETTER. NOTE: IF REMOVED, REMOVE CLASS "dashboard-section FROM line 217, 237, 296, 307. IF KEPT MOVE TO EXTERNAL CSS!!*/
                margin-bottom: 10px;       /* spacing between sections */
                padding: 40px 30px;             
                border-radius: 8px;       
                background-color: rgba(255, 255, 255, 0.05); 
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3),
                    0 8px 20px rgba(0, 0, 0, 0.15),
                    0 12px 40px rgba(0, 0, 0, 0.1);
                width: 100%;
                box-sizing: border-box; 
            }
        </style>
    </head>
    <body>
        <?php include "./includes/header.inc"; ?>

        <main id="manage-dashboard" role="main" aria-label="Administrator EOI Management Dashboard">
            <h2 class="page-title" style="color: #fffdfde7;">Manage Dashboard</h2>
            <!-- Section 1: List EOIs -->
            <section class="dashboard-section" role="region" aria-labelledby="list-eois-title"> 
                <h2 id="list-eois-title" class="section-title">List EOIs</h2>
                <form class="dashboard-form" method="GET" action="" role="form" aria-label="Search EOIs">
                    <label for="list_by" class="label-title">List by:</label>
                    <select id="list_by" name="list_by" class="input-select">
                        <option value="all">List All</option>
                        <option value="job_reference">Job Reference</option>
                        <option value="first_name">First Name</option>
                        <option value="last_name">Last Name</option>
                        <option value="first_and_last_name">First and Last Name</option>
                    </select>
                    <label for="query_value" class="label-title">Search Value:</label>
                    <input type="text" id="query_value" name="query_value" class="input-text">
                    <br>
                    <button type="submit" class="btn btn-primary" aria-label="Search EOIs">Search</button>
                </form>
            </section>
            <br><br>

            <!-- Display Combined EOI Table -->
            <section class="dashboard-section"  role="region" aria-labelledby="eoi-records-title">
                <h2 id="eoi-records-title" class="section-title">EOI Records</h2>
                <div class="table-wrapper">
                <table class="records-table" role="table" aria-label="EOI Records">   <!-- !! ryan to do: table border="1" is obsolete in html. remove comment after validation !!  -->
                    <tr>
                        <!-- Main Table Headers -->
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.eoi_id'])); ?>">EOI ID</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.email'])); ?>">Email</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.ref_num'])); ?>">Job Reference</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.first_name'])); ?>">First Name</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.last_name'])); ?>">Last Name</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.birth_date'])); ?>">Birth Date</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.gender'])); ?>">Gender</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.phone_num'])); ?>">Phone Number</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.other_skills'])); ?>">Other Skills</a></th>


                        <!-- Location Table Headers -->
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'l.street_address'])); ?>">Street Address</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'l.suburb_town'])); ?>">Suburb/Town</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'l.state'])); ?>">State</a></th>
                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'l.postcode'])); ?>">Postcode</a></th>

                        <!-- Skills Header -->
                        <th>Skills</th>

                        <th><a href="?<?php echo http_build_query(array_merge($_GET, ['sort' => 'm.status'])); ?>">Status</a></th>
                    </tr>
                    <?php foreach ($eoi_data as $row): ?>
                    <tr>
                        <!-- Main Table Data -->
                        <td><?php echo htmlspecialchars($row['eoi_id']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['ref_num']); ?></td>
                        <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['birth_date']); ?></td>
                        <td><?php echo htmlspecialchars($row['gender']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone_num']); ?></td>
                        <td><?php echo htmlspecialchars($row['other_skills']); ?></td>


                        <!-- Location Table Data -->
                        <td><?php echo htmlspecialchars($row['street_address']); ?></td>
                        <td><?php echo htmlspecialchars($row['suburb_town']); ?></td>
                        <td><?php echo htmlspecialchars($row['state']); ?></td>
                        <td><?php echo htmlspecialchars($row['postcode']); ?></td>

                        <!-- Skills Data -->
                        <td><?php echo htmlspecialchars($row['skills']); ?></td>

                        <td><?php echo htmlspecialchars($row['status']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                </div>    
            </section>
             <br><br>       
            <!-- Section 2: Delete EOIs by Job Reference -->
            <section class="dashboard-section" role="region" aria-labelledby="delete-eois-title">       
                <h2 class="section-title" id="delete-eois-title">Delete EOIs by Job Reference</h2>
                <form class="dashboard-form" method="POST" action="" onsubmit="return confirm('Are you sure you want to delete all EOIs with this job reference? This action cannot be undone.')" role="form" aria-label="Delete EOIs">
                    <label for="delete_job_reference" class="label-title">Job Reference:</label>
                    <input type="text" id="delete_job_reference" name="delete_job_reference" class="input-text" required>
                    <br>
                    <button type="submit" class="btn btn-danger"  aria-label="Delete EOIs">Delete EOIs</button>
                </form>
            </section>
            <br><br>        
            <!-- Section 3: Change EOI Status -->
            <section class="dashboard-section" role="region" aria-labelledby="change-eoi-status-title">
                <h2 class="section-title" id="change-eoi-status-title">Change EOI Status</h2>
                <form class="dashboard-form" method="POST" action="" role="form" aria-label="Update EOI Status">
                    <label for="update_eoi_id" class="label-title">EOI ID:</label>
                    <input type="number" id="update_eoi_id" name="update_eoi_id" class="input-text" required>
                    
                    <label for="update_status" class="label-title">New Status:</label>
                    <select id="update_status" name="update_status" class="input-select" required>
                        <option value="New">New</option>
                        <option value="Current">Current</option>
                        <option value="Final">Final</option>
                    </select>
                    <br>      
                    <button type="submit" class="btn btn-primary" aria-label="Update EOI Status">Update Status</button>
                </form>
            </section>
        </main>

        <?php include "./includes/footer.inc"; ?>
    </body>
</html>
