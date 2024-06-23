<?php
session_start();

$connection = new mysqli('localhost', 'root', '', 'school_queue');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if(isset($_POST['name'], $_POST['id_number'], $_POST['email'], $_POST['school'], $_POST['password'])) {
        $name = $_POST['name'];
        $idNumber = $_POST['id_number'];
        $email = $_POST['email'];
        $school = $_POST['school'];
        $password = $_POST['password'];

        // Check if the user already exists
        $sql_check_user = "SELECT id_number FROM users WHERE id_number = ?";
        $stmt_check_user = $connection->prepare($sql_check_user);
        $stmt_check_user->bind_param("s", $idNumber);
        $stmt_check_user->execute();
        $result_check_user = $stmt_check_user->get_result();

        if ($result_check_user->num_rows > 0) {
            // User already exists, handle accordingly
            // echo "User already exists.";
        } else {
            // User does not exist, proceed with registration
            $sql_insert_user = "INSERT INTO users (name, id_number, email, school, password) VALUES (?, ?, ?, ?, ?)";
            $stmt_insert_user = $connection->prepare($sql_insert_user);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt_insert_user->bind_param("sssss", $name, $idNumber, $email, $school, $hashedPassword);
            if ($stmt_insert_user->execute()) {
                // echo "New record created successfully";
                // Redirect or perform other actions after successful registration
            } else {
                echo "Error: " . $stmt_insert_user->error;
            }
        }

        $stmt_check_user->close();
    } else {
    }
}

$connection->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUEUE NOW</title>
    <link rel="stylesheet" href="page2.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="common.js"></script>
</head>
<body>
    <header class="top-bar">
        <div class="profile-icon">
            <img src="Images used\menu.png" alt="Profile Icon">
            <div id="profileDetails"></div>
        </div>
        <h1>EnrollAQ</h1>
    </header>
    <div class="container">
        <header>
            <div class="header-content">
                <img src="Images used/Animation.gif" alt="animation" class="animation1">
                <div class="title-logo">
                    <img src="Images used/EnrollAQ.png" alt="EnrollAQ Logo" class="logo">
                    <form method="POST" action="page3.php"> 
                        <button type="submit" name="queue_now" class="queue-button">QUEUE NOW</button> 
                    </form>
                </div>

                <img src="Images used\animation2.gif" alt="animation" class="animation2">
            </div>
        </header>
        <div class="banner">
            <div class="school-buttons">
                <button class="school-button" id="safad">
                    <span class="material-icons">school</span>
                    SAFAD
                </button>
                <button class="school-button" id="shcp">
                    <span class="material-icons">local_hospital</span>
                    SHCP
                </button>
                <button class="school-button" id="sas">
                    <span class="material-icons">science</span>
                    SAS
                </button>
                <button class="school-button" id="soe">
                    <span class="material-icons">engineering</span>
                    SOE
                </button>
                <button class="school-button" id="sbe">
                    <span class="material-icons">business_center</span>
                    SBE
                </button>
                <button class="school-button" id="slg">
                    <span class="material-icons">gavel</span>
                    SLG
                </button>
                <button class="school-button" id="sed">
                    <span class="material-icons">psychology</span>
                    SED
                </button>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 EnrollAQ. All rights reserved.</p>
    </footer>
    <script src="common.js">
    
</script>
</body>
</html>
