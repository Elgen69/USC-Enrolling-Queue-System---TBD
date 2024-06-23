<?php
session_start();
date_default_timezone_set('Asia/Manila');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$conn = new mysqli('localhost', 'root', '', 'school_queue');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Fetch the latest user
$query = "SELECT users.name, users.id_number, users.queue_number, users.email, schools.name AS school_name 
          FROM users 
          JOIN schools ON users.school = schools.name 
          ORDER BY users.id_number DESC 
          LIMIT 1";

$result = $conn->query($query);

if ($result === false) {
    die("Query failed: " . $conn->error);
}

$user = $result->fetch_assoc();

if (!$user) {
    die("No user found.");
}

// Decrement queue number every 5 minutes example for now
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['decrement'])) {
    $conn->query("UPDATE users SET queue_number = queue_number - 1 WHERE id_number = '{$user['id_number']}' AND queue_number > 1");
    header("Location: page3.php");
    exit();
}

// Cancel Queue
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cancel'])) {
    $conn->query("DELETE FROM users WHERE id_number = '{$user['id_number']}'");
    session_destroy();
    header("Location: main.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="page2.css">
    <link rel="stylesheet" href="page3.css">
    <script src="common.js"></script> 
    <title>QUEUE DETAILS</title>
</head>
<body>
    <header class="top-bar">
        <div class="profile-icon">
            <img src="Images used/menu.png" alt="Profile Icon">
            <div id="profileDetails"></div>
        </div>
        <h1>EnrollAQ</h1>
    </header>
    <main>
        <div class="queue-info">
            <h3>You are currently number</h3>
            <h1 id="queueNumber"><?php echo $user['queue_number']; ?></h1>
            <p>in line</p>
            <br>
            <p>Last update: <span id="lastUpdate"><?php echo date('h:i A'); ?></span></p>
            <br>
            <p><?php echo date('F j, Y'); ?></p>
            <form method="post">
                <button type="submit" name="cancel" class="cancel-button">Cancel my Request</button>
            </form>
        </div>
        <div class="user-details">
            <div>
                <p>Name: <?php echo htmlspecialchars($user['name']); ?></p>
                <p>ID Number: <?php echo htmlspecialchars($user['id_number']); ?></p>
                <p>School: <?php echo htmlspecialchars($user['school_name']); ?></p>
                <p>Status: <?php echo ($user['queue_number'] == 1) ? 'Your Turn to Enroll' : 'Pending'; ?></p>
                <p>Estimated Wait: <?php echo max(($user['queue_number'] - 1) * 5, 0); ?> minutes</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 EnrollAQ. All rights reserved.</p>
    </footer>
</body>
