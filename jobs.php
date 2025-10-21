<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=domain,deployed_code,location_on" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish connection to API-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" /> <!--google fonts icon-->
</head>
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'your_database_name';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$sql = "
SELECT jm.*, 
       jc.company_name, jc.company_logo, 
       jl.job_location, jl.location_logo
FROM job_main jm
JOIN job_company jc ON jm.company_id = jc.company_id AND jm.ref_num = jc.ref_num
JOIN job_location jl ON jm.location_id = jl.location_id AND jm.ref_num = jl.ref_num
ORDER BY jm.ref_num
";

$result = $conn->query($sql);
$jobs = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ref = $row['ref_num'];

        // Fetch summary
        $summaryRes = $conn->query("SELECT job_summary FROM job_summary WHERE ref_num='$ref'");
        $summary = [];
        while ($s = $summaryRes->fetch_assoc()) {
            $summary[] = $s['job_summary'];
        }

        // Fetch requirements
        $reqRes = $conn->query("SELECT job_requirement FROM job_requirement WHERE ref_num='$ref'");
        $requirements = [];
        while ($r = $reqRes->fetch_assoc()) {
            $requirements[] = $r['job_requirement'];
        }

        // Fetch involvement
        $invRes = $conn->query("SELECT job_involvement FROM job_involvement WHERE ref_num='$ref'");
        $involvement = [];
        while ($i = $invRes->fetch_assoc()) {
            $involvement[] = $i['job_involvement'];
        }

        // Fetch appeal
        $appRes = $conn->query("SELECT job_appeal FROM job_appeal WHERE ref_num='$ref'");
        $appeal = [];
        while ($a = $appRes->fetch_assoc()) {
            $appeal[] = $a['job_appeal'];
        }

        $jobs[] = [
            'main' => $row,
            'summary' => $summary,
            'requirement' => $requirements,
            'involvement' => $involvement,
            'appeal' => $appeal
        ];
    }
}
?>
<body>
    <?php include "./includes/header.inc" ?>
    <div class="container_jobs">
    <?php foreach($jobs as $index => $job): ?>
        <input class="jobpage" type="radio" name="joblist" id="job<?= $index+1 ?>" <?= $index===0 ? 'checked' : '' ?>>
    <?php endforeach; ?>

    <main class="job-detail">
    <?php foreach($jobs as $index => $job): ?>
        <div class="detail medium-padding" id="detail<?= $index+1 ?>">
            <h2><?= $job['main']['job_name'] ?> <span class="material-symbols-outlined"><?= $job['main']['job_logo'] ?></span></h2>
            <p class="company"><span class="material-symbols-outlined">domain</span><?= $job['main']['company_name'] ?></p>
            <p class="location"><span class="material-symbols-outlined"><?= $job['main']['location_logo'] ?></span><?= $job['main']['job_location'] ?></p>
            <p class="salary">A$<?= $job['main']['salary_min'] ?>-<?= $job['main']['salary_max'] ?></p>
            <hr>
            <article>
                <section class="bottom-margin">
                    <h3>What We're looking for:</h3>
                    <ul>
                        <?php foreach($job['requirement'] as $req): ?>
                            <li><?= $req ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <section class="bottom-margin">
                    <h3>What's Involved:</h3>
                    <ol class="job-detail-ordered-list">
                        <?php foreach($job['involvement'] as $inv): ?>
                            <li><?= $inv ?></li>
                        <?php endforeach; ?>
                    </ol>
                </section>
                <section class="bottom-margin">
                    <h3>Why Join Us:</h3>
                    <ul>
                        <?php foreach($job['appeal'] as $app): ?>
                            <li><?= $app ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </article>
        </div>
    <?php endforeach; ?>
    </main>
</div>
                <!-- TO DO: Once detail1 is dynamic, remove detail2-4 -->
    <?php include "./includes/footer.inc" ?>
</body>
</html> 
