<?php

// Establish database connection
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Connection failed');

// Check if form for appointment submission is submitted
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
    $time = $_POST['time']; 
    // New line to get the AM/PM value
    // Convert time to 12-hour format
    $time = date("H:i", strtotime($time));

   

    
    $service = $_POST['service']; 

    // Function to validate Indian mobile number format
    function isValidMobileNumber($number) {
        // Indian mobile number format: 10 digits starting with 7, 8, or 9
        return preg_match('/^[789]\d{9}$/', $number);
    }

    // Function to validate email format
    function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    $validAppointment = true; // Flag to track appointment validity

    // Validate mobile number format
    if (!isValidMobileNumber($number)) {
        echo '<script>alert("Please enter a valid Indian mobile number.");</script>';
        $validAppointment = false; // Appointment is invalid
    }

    // Validate email format
    if (!isValidEmail($email)) {
        echo '<script>alert("Please enter a valid email address.");</script>';
        $validAppointment = false; // Appointment is invalid
    }

    // Proceed to insert appointment if all validations passed
    if ($validAppointment) {
        // Check if the appointment already exists for the same email and date/time
        $check_query = "SELECT * FROM `contact_form` WHERE email = '$email' AND date = '$date' AND time = '$time'";

        $check_result = mysqli_query($conn, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            echo '<script>alert("Appointment already exists at the same time.");</script>';
        } else {
            // Insert the appointment if no conflict
            $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date,time, service) VALUES ('$name', '$email', '$number', '$date','$time', '$service')") or die('Query failed');
            if ($insert) {
                echo '<script>alert("Appointment made successfully!");</script>';
            } else {
                echo '<script>alert("Appointment failed.");</script>';
            }
        }
    }
}




// Check if form for admin login is submitted
if (isset($_POST['admin_login'])) {
    // Sanitize user inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Prepare SQL query
    $sql = "SELECT * FROM `admins` WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if query was successful
    if ($result) {
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            // Login successful
            $login = true;
            $admin_message = 'Login successful';
            // Redirect to admin dashboard or any other page
            header('Location: displayfiles.php');
            exit();
        } else {
            // Login failed
           
            echo '<script>alert("Invalid username or password");</script>';

        }
    } else {
        // Query failed
        $admin_message = 'Query failed';
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header section starts here-->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Doc<span>Sync.</span></a>

                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                   
                    <a href="#contact">make-appointment</a>
                    <a href="#admin-login">admin-login</a>
                </nav>



                <div id="menu-btn" class="fas fa-bars"></div>

            </div>
        </div>
    </header>


    <!-- home section starts here-->

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>LET US BRIGHTEN YOUR SMILE</h3>
                    <p>Empowering Patients With convient Scheduling and expert Care,One Appointment At A Time</p>
                    <a href="learn.php" class="link-btn">Learn more</a>

                </div>



            </div>
        </div>
    </section>

    <!-- about section starts here-->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-mid-6 image">

                    <img src="./images/img2.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>ABOUT US</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>DocSync Is A Healthcare Appointment Platform Designed To Simplify Your Journey To Optimal Health.We're Dedicated To Creating A Seamless Experience For Patients.DocSync streamlines healthcare appointments, offering a user-friendly platform for scheduling and managing appointments. Our focus on patient experience ensures a smooth journey towards optimal health, providing convenience and accessibility every step of the way. Join us in revolutionizing healthcare access and enhancing patient care.</p>
                   
                </div>
            </div>

        </div>

    </section>
    <!-- service section starts here -->

    <section class="services" id="services">

        <h1 class="heading">our services</h1>
        <div class="box-container container">

<a  href="#contact" style="text-decoration:none;">
            <div class="box">
                <img src="./images/ic1.png" width="50px" alt="">
                <h3 style="color:purple">Alignment Specialist</h3>
                <p>Our Alignment specialist service offers comprehensive oral care, ensuring your dental health is prioritized with personalized treatment plans, state-of-the-art technology, and a compassionate approach.</p>
            </div>
</a>
<a  href="#contact" style="text-decoration:none;">
            <div class="box">
                <img src="./images/ic2.png" width="50px" alt="">
                <h3 style="color:purple">Child Specialist</h3>
                <p>Our child specialist service focuses on the unique healthcare needs of children, providing specialized medical care, preventive services, and compassionate support for families.</p>
            </div>
</a>
<a  href="#contact" style="text-decoration:none;">
            <div class="box">
                <img src="./images/ic3.png" width="60px" alt="">
                <h3 style="color:purple">Heart Specialist</h3>
                <p>Our heart specialist service offers comprehensive cardiovascular care, including diagnostic testing, treatment, and ongoing management of heart conditions.</p>
            </div>
</a>
            <a  href="#contact" style="text-decoration:none;">
            <div class="box">
                <img src="./images/ic4.png" width="60px" alt="">
                <h3 style="color:purple">Psychiatrist</h3>
                <p>Our psychiatrist service provides compassionate and personalized mental health care, addressing a wide range of psychological concerns. </p>
            </div>
</a>
<a  href="#contact" style="text-decoration:none;">
            <div class="box">
                <img src="./images/ic5.png" width="50px" alt="">
                <h3 style="color:purple">Gynecologist</h3>
                <p>Our gynecologist service offers compassionate and comprehensive care for women's reproductive health needs.</p>
            </div>
</a>
<a  href="#contact" style="text-decoration:none;">
            <div class="box">
                <img src="./images/ic6.png" width="50px" alt="">
                <h3 style="color:purple">Dermatologist</h3>
                <p>Our dermatologist service provides expert care for skin, hair, and nail conditions. With advanced diagnostics and personalized treatment plans.</p>
            </div>
</a>
        </div>
    </section>
  

    <!-- contact section starts here -->
    <section class="contact" id="contact">
        <h1 class="heading">make appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
        if(isset($message)){
          foreach($message as $message){
            echo '<p class="message">' . $message . '</p>';
          }
        }
        ?>
        <select name="service" class="box" required>
            <option value="" selected disabled>Select Service</option>
            <option value="Alignment Specialist">Alignment Specialist</option>
            <option value="Child Specialist">Child Specialist</option>
            <option value="Heart Specialist">Heart Specialist</option>
            <option value="Psychiatrist">Psychiatrist</option>
            <option value="Gynecologist">Gynecologist</option>
            <option value="Dermatologist">Dermatologist</option>
        </select>
            <span>Your name:</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>Your email:</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>Your number:</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>Appointment date:</span>
            
<input type="date" name="date" class="box" required>
<span>Appointment time:</span><div class="box" style="display: flex;">
    <input type="time" name="time" style="width: 50%;" required>
  
    </select>
</div>

            
        
            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>
    </section>

    <!-- admin login starts here -->
    <section class="admin-login" id="admin-login">
    <h1 class="heading">Admin Login</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
        if(isset($admin_message)){
            echo '<p class="message">' . $admin_message . '</p>';
        }
        ?>
        <span>Username:</span>
        <input type="text" name="username" placeholder="Enter your username" class="box" required>
        <span>Password:</span>
        <input type="password" name="password" placeholder="Enter your password" class="box" required>
        <input type="submit" value="Login" name="admin_login" class="link-btn">
    </form>
</section>


<!-- footer section starts here -->

<section class="footer">

<div class="box-container container">

<div class="box">
<i class="fas fa-phone"></i>
<h3>phone number</h3>
<p>+123-456-7890</p>
<p>+122-222-7866</p>
</div>

<div class="box">
<i class="fas fa-map-marker-alt"></i>
<h3>our address</h3>
<p>udupi,india-576101</p>

</div>

<div class="box">
<i class="fas fa-clock"></i>
<h3>opening hours</h3>
<p>7:00Am to 10:00Pm</p>

</div>

<div class="box">
<i class="fas fa-envelope"></i>
<h3>email address</h3>
<p>sahityahebbar@gmail.com</p>
<p>vineethrao@gmail.com</p>
</div>


</div>


</section>
    <script src=" ./js/script.js"></script>
</body>


</html>