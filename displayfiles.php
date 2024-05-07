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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
    <!-- header section starts here-->
    <header class="header fixed-top">
        <div class="container">
      
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Doc<span>Sync.</span></a>
                <nav class="nav">
                    <a href="index.php">Logout</a>
                </nav>
               
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>

    <div class="containers" style="margin-top:0">
    <div class="head-container">
        <h2 class="head">Appointments Scheduled</h2>
    </div>
    <?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

$sql = "SELECT * FROM contact_form";
$data = mysqli_query($conn, $sql);
$portal = mysqli_num_rows($data);

if($portal != 0) {
    while($result = mysqli_fetch_assoc($data)) {
        
            $formatted_date = date('d-m-Y', strtotime($result['date']));
            $email = mb_strtolower($result['email']);
          
            $appointment_time = date('H:i', strtotime($result['time']));
        echo '<div class="card1 offset-2 col-7 my-2">
            <div class="card1" >
                <h5 class="card-header" style="margin-top: 100px;">Name:'.$result['name'].'</h5>
                <div class="card-body">
                <p class="card-text">Service: '.$result['service'].'</p>
                    <p class="card-text">Phone Number: '.$result['number'].'</p>
                    <p class="card-text">Email: '.$email.'</p>
                    <p class="card-text">Date: '.date('d-m-Y', strtotime($result['date'])).'</p>
                    <p class="card-text">Time: '.$appointment_time .'</p>
                  
                </div>
            </div>
        </div>';
    }
}
else {
    echo '<div class="no-data-found">No data found</div>';
}
?>

    </div>

<section class="footer" style="background-color:var(--ligt-bg);">

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