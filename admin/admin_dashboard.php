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
            <li><a href="alumni/manage_alumni.php">Alumni</a></li>
            <li><a href="events/events_admin.php">Events</a></li>
            <li><a href="executives/manage_executives.php">Executives</a></li>
            <li><a href="faculty/manage_faculty.php">Faculty</a></li>
            <li><a href="members/manage_members.php">Members</a></li>
            <li><a href="partners/manage_partners.php">Partners</a></li>
            <li><a href="sponsors/manage_sponsors.php">Sponsors</a></li>
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