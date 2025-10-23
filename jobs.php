<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "settings.php";
$conn = mysqli_connect($host, $username, $password, $database);

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

// Fetch all tables (TO DO: merge into jobs table)
$tables = [
    'job_main' => fetchTableData($conn, 'job_main'),
    'job_appeal' => fetchTableData($conn, 'job_appeal', 'ref_num, appeal_id'),
    'job_company' => fetchTableData($conn, 'job_company'),
    'job_involvement' => fetchTableData($conn, 'job_involvement', 'ref_num, involvement_id'),
    'job_location' => fetchTableData($conn, 'job_location'),
    'job_requirement' => fetchTableData($conn, 'job_requirement', 'ref_num, requirement_id'),
    'job_summary' => fetchTableData($conn, 'job_summary', 'ref_num, summary_id')
];

// Determine selected job ref from query string
$selectedRef = $_GET['job'] ?? null;

$selectedRef = $_GET['job'] ?? $tables['job_main'][0]['ref_num'] ?? null;
$selectedJob = current(array_filter($tables['job_main'], fn($job) => $job['ref_num'] === $selectedRef));

// Store data in session or use directly
session_start();
$_SESSION['job_data'] = $tables;

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">  <!--meta description to be filled later-->
    <title>Jobs page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=domain,deployed_code,location_on" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish connection to API-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" /> <!-- Load Google icons -->
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <style>
        .text-bigger-size {
        color: black;
        font-size: 1.5em; 
        }

        .text {
            color: black;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <?php include "./includes/header.inc" ?>
    
    <div class="container_jobs">
    <main class="job-detail">
        <?php if ($selectedJob):
            $ref = $selectedJob['ref_num'];
            $company = current(array_filter($tables['job_company'], fn($c) => $c['ref_num'] === $ref));
            $location = current(array_filter($tables['job_location'], fn($l) => $l['ref_num'] === $ref));
            $reqs = array_filter($tables['job_requirement'], fn($r) => $r['ref_num'] === $ref);
            $invs = array_filter($tables['job_involvement'], fn($i) => $i['ref_num'] === $ref);
            $apps = array_filter($tables['job_appeal'], fn($a) => $a['ref_num'] === $ref);
        ?>
        <h2><?= htmlspecialchars($selectedJob['job_name']) ?></h2>

            <p class='text-bigger-size'>
                <?= htmlspecialchars($company['company_name'] ?? '') ?>
                <?php if (!empty($company['company_logo'])): ?>
                    <span class="material-symbols-outlined"><?= htmlspecialchars($company['company_logo']) ?></span>
                <?php endif; ?>
            </p>

            <p class='text-bigger-size'>
                <?= htmlspecialchars($location['job_location'] ?? '') ?>
                <?php if (!empty($location['location_logo'])): ?>
                    <span class="material-symbols-outlined"><?= htmlspecialchars($location['location_logo']) ?></span>
                <?php endif; ?>
            </p>

            <p class="salary">AUD <?= htmlspecialchars($selectedJob['salary_min']) ?> – <?= htmlspecialchars($selectedJob['salary_max']) ?></p>
            <p class='text'><strong>Ref:</strong> <?= htmlspecialchars($selectedJob['ref_num']) ?> </p>
            <p class='text'><strong>Reporting Line:</strong> <?= htmlspecialchars($selectedJob['reporting_line']) ?> </p>
        <hr>
        <section>
                <h3 class='text'>Requirements:</h3>
                <ul>
                    <?php foreach ($reqs as $r): ?>
                        <li><?= htmlspecialchars($r['job_requirement']) ?></li>
                    <?php endforeach; ?>
                </ul>
        </section>
        <section>
            <h3 class='text'>Involvement:</h3>
                <ol>
                    <?php foreach ($invs as $index => $i): ?>
                        <li>
                            <strong><?= htmlspecialchars($i['job_involvement']) ?></strong>

                            <?php if (isset($reqs[$index])): ?>
                                <ul>
                                    <li><?= htmlspecialchars($reqs[$index]['job_requirement']) ?></li>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
        </section>

        <section>
            <h3 class='text'>Why Join Us:</h3>
            <ul>
                <?php foreach ($apps as $a): ?>
                    <li><?= htmlspecialchars($a['job_appeal']) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <!-- If no job is selected, show a default message -->
    <?php else: ?>
        <h2>Select a job to view its details.</h2>
    <?php endif; ?>

    </main>
    <aside class="detail">
            <?php foreach ($tables['job_main'] as $job): 
                $isActive = ($job['ref_num'] === $selectedRef) ? 'active' : ''; 
                //Credit to ChatGPT for teaching me this array_filter technique
                $summaries = array_filter($tables['job_summary'], fn($s) => $s['ref_num'] === $job['ref_num']);
                $company = current(array_filter($tables['job_company'], fn($c) => $c['ref_num'] === $job['ref_num']));
                $location = current(array_filter($tables['job_location'], fn($l) => $l['ref_num'] === $job['ref_num']));
            ?>
                <div class ="job-list <?= $isActive ?>">
                    <a class="job-link" href="?job=<?= urlencode($job['ref_num']) ?>">
                        <p style='font-size: 2em;'><strong><?= htmlspecialchars($job['job_name']) ?></strong></p>
                        <p class='text-bigger-size'>
                            <?= htmlspecialchars($company['company_name'] ?? '') ?>
                            <?php if (!empty($company['company_logo'])): ?>
                                <span class="material-symbols-outlined"><?= htmlspecialchars($company['company_logo']) ?></span>
                            <?php endif; ?>
                        </p>
                        <p class='text-bigger-size'>
                            <?= htmlspecialchars($location['job_location'] ?? '') ?>
                            <?php if (!empty($location['location_logo'])): ?>
                                <span class="material-symbols-outlined"><?= htmlspecialchars($location['location_logo']) ?></span>
                            <?php endif; ?>
                        </p>
                        <p class='text'><strong>Ref:</strong> <?= htmlspecialchars($job['ref_num']) ?> </p>
                        <p class='text'><strong>Reporting Line:</strong> <?= htmlspecialchars($job['reporting_line']) ?> </p>
                        <strong class='text'> Job Summary: </strong>
                        <?php if ($summaries): ?>
                            <ul class="summary-list">
                                <?php foreach ($summaries as $s): ?>
                                    <li><?= htmlspecialchars($s['job_summary']) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </a>
                </div>
            <?php endforeach; ?>
    </aside>
</div>

<!-- Include footer -->
<?php include "./includes/footer.inc"; ?>

</body>
</html>

