<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>KBEC Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>

<div class="admin-container">

    <div class="sidebar">

        <h2>KBEC Admin</h2>

        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="alumni/managealumni.php">Alumni</a></li>
            <li><a href="events/manageevent.php">Events</a></li>
            <li><a href="executives/manageexecutive.php">Executives</a></li>
            <li><a href="faculty/managefaculty.php">Faculty</a></li>
            <li><a href="members/managemember.php">Members</a></li>
            <li><a href="partners/managepartner.php">Partners</a></li>
            <li><a href="sponsors/managesponsor.php">Sponsors</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </div>

    <div class="main-content">

        <h1>Dashboard</h1>

        <div class="card">
            Welcome Admin
        </div>

    </div>

</div>

</body>
</html>