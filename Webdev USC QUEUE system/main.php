<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnrollAQ</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="common.js"></script>
</head>

<body>
    <div class="container">
        <div class="form-section">
            <img src="Images used/EnrollAQ.png" alt="EnrollAQ Logo" class="logo">
            <h2>Input Your Details</h2>
            <p>Already Registered? <a href="" class="login-link" id="login-link">Login</a></p>
            <form action="Page2.php" method="post" class="signup-form">
                <input type="text" name="name" id="nameInput" placeholder="Name" required>
                <input type="text" name="id_number" id="idInput" placeholder="ID Number" required>
                <input type="email" name="email" id="emailInput" placeholder="Email" required>
                <select name = "school" id="schoolInput"required>
                    <option value="" disabled selected>SCHOOL TO ENROLL</option>
                    <option value="SAFAD">SAFAD</option>
                    <option value="SHCP">SHCP</option>
                    <option value="SAS">SAS</option>
                    <option value="SOE">SOE</option>
                    <option value="SBE">SBE</option>
                    <option value="SLG">SLG</option>
                    <option value="SED">SED</option>
                </select>
                <input type="password" name="password" id="passwordInput" placeholder="Password" required>
                <button type="submit" onclick="storeFormData()">ENTER</button>
            </form>
        </div>
            <img src="Images used/Cupgif.gif" alt="Decorative GIF" class="gif1">
            <img src="Images used/Bubbles.png" alt="Bubbles" class="bubbles1">
    </div>

    <div class="extra-content">
        <section class="about">
            <h2>About Us</h2>
            <p>Welcome to EnrollAQ, your streamlined solution for university enrollment management. Our mission is to make the enrollment process easier and more efficient for students and educational institutions alike.</p>

            <h3>Our Mission</h3>
            <p>At EnrollAQ, we understand the frustrations that come with traditional enrollment systems, especially during peak times. Our goal is to alleviate these issues by providing a smooth, user-friendly queue management system that ensures a fair and organized process.</p>

            <h3>What We Do</h3>
            <p>EnrollAQ offers a simple yet effective platform where students can sign up, log in, and queue for enrollment slots in their desired schools within the university. We aim to reduce wait times and improve the overall experience for everyone involved.</p>

            <h3>Our Team</h3>
            <p>We are a dedicated team of developers, designers, and educators committed to enhancing the enrollment experience. With a deep understanding of the challenges faced by both students and institutions, we strive to deliver a reliable and innovative solution.</p>

            <h3>Contact Us</h3>
            <p>If you have any questions or need assistance, feel free to reach out to us at support@EnrollAQ.com. We are here to help and ensure your enrollment process is as smooth as possible.</p>
        </section>

        <section class="terms">
            <h2>Terms and Conditions</h2>
            <p>Welcome to EnrollAQ! By using our website, you agree to comply with and be bound by the following terms and conditions of use. Please review these terms carefully.</p>

            <h3>1. Acceptance of Terms</h3>
            <p>By accessing and using EnrollAQ, you accept and agree to be bound by the terms and provisions of this agreement. In addition, when using EnrollAQ's services, you shall be subject to any posted guidelines or rules applicable to such services.</p>

            <h3>2. Description of Service</h3>
            <p>EnrollAQ provides users with a queue management system for university enrollment. The service includes features for signing up, logging in, selecting a school, and queuing for enrollment times.</p>

            <h3>3. User Responsibilities</h3>
            <p>Users are responsible for maintaining the confidentiality of their account and password and for restricting access to their computer. Users agree to accept responsibility for all activities that occur under their account or password.</p>

            <h3>4. Privacy Policy</h3>
            <p>Your use of EnrollAQ is also subject to our Privacy Policy. Please review our Privacy Policy, which also governs the website and informs users of our data collection practices.</p>

            <h3>5. Limitation of Liability</h3>
            <p>In no event shall EnrollAQ, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from (i) your use or inability to use the service; (ii) any unauthorized access to or use of our servers and/or any personal information stored therein.</p>

            <h3>6. Changes to Terms</h3>
            <p>EnrollAQ reserves the right, at its sole discretion, to modify or replace these Terms at any time. If a revision is material we will provide at least 30 days notice prior to any new terms taking effect.</p>

            <p>If you have any questions about these Terms, please contact us at support@EnrollAQ.com.</p>
        </section>

        <section class="privacy">
            <h2>Privacy Policy</h2>
            <p>At EnrollAQ, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website and use our services.</p>

            <h3>1. Information We Collect</h3>
            <p>We may collect personal information that you voluntarily provide to us when you register on the website, such as your name, email address, student ID number, and school of interest.</p>

            <h3>2. How We Use Your Information</h3>
            <p>We use the information we collect to provide, operate, and maintain our services, to improve and personalize your experience, and to communicate with you, including for customer service and support.</p>

            <h3>3. Sharing Your Information</h3>
            <p>We do not share your personal information with third parties without your consent, except as necessary to provide you with our services or as required by law.</p>

            <h3>4. Security of Your Information</h3>
            <p>We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable.</p>

            <h3>5. Changes to This Privacy Policy</h3>
            <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page. You are advised to review this Privacy Policy periodically for any changes.</p>

            <p>If you have any questions about this Privacy Policy, please contact us.</p>
        </section>

        <footer>
            <p>&copy; 2024 EnrollAQ. All rights reserved.</p>
        </footer>
    </div>

    <div id="login-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="close-btn">&times;</span>
            <h2>Login</h2>
            <form id = "login-form" action="page2.php" method="post" class="login-form">
                <input type="text" name="username" placeholder="ID Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" id="login-btn">Login</button>
            </form>
        </div>
    </div>

    <button class="scroll-btn" id="scroll-btn">
        <img src="Images used/downarrow.png" alt="Scroll Down" />
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const loginBtn = document.getElementById('login-link');
        loginBtn.addEventListener('click', function() {
            const idNumber = document.getElementById('idInput').value;
            const password = document.getElementById('passwordInput').value;

            const formData = new FormData();
            formData.append('id_number', idNumber);
            formData.append('password', password);

            fetch('main.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Redirect user to a new page or perform any other action
                    alert('Login successful!');
                } else {
                    alert('Invalid ID number or password.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });


    
    document.addEventListener('DOMContentLoaded', function() {
    const scrollButton = document.getElementById('scroll-btn');
    const loginLink = document.getElementById('login-link');
    const loginModal = document.getElementById('login-modal');
    const closeBtn = document.getElementById('close-btn');
    let isAtBottom = false;

    function updateScrollIcon() {
        if (window.scrollY + window.innerHeight >= document.body.scrollHeight - 10) {
            scrollButton.innerHTML = '<img src="Images used/uparrow.png" alt="Scroll Up" />';
            isAtBottom = true;
        } else if (window.scrollY <= 10) {
            scrollButton.innerHTML = '<img src="Images used/downarrow.png" alt="Scroll Down" />';
            isAtBottom = false;
        }
    }

    scrollButton.addEventListener('click', () => {
        if (isAtBottom) {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
            window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
        }
    });

    window.addEventListener('scroll', updateScrollIcon);
    updateScrollIcon();

    loginLink.addEventListener('click', (e) => {
        e.preventDefault();
        loginModal.style.display = 'block';
    });

    closeBtn.addEventListener('click', () => {
        loginModal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target == loginModal) {
            loginModal.style.display = 'none';
        }
    });
});
    

    </script>
</body>
<?php

$connection = new mysqli('localhost', 'root', '', 'school_queue');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idNumber = $_POST['id_number'];
    $password = $_POST['password'];

    // Prepare SQL statement to select user with given ID number
    $sql = "SELECT * FROM users WHERE id_number = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $idNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Passwords match, login successful
            $_SESSION['user_id'] = $row['id']; // Store user ID in session
            $response = array('success' => true);
        } else {
            // Passwords don't match
            $response = array('success' => false);
        }
    } else {
        // User with given ID number not found
        $response = array('success' => false);
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

$connection->close();
?>
</html>
