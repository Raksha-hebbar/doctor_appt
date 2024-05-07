<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn More</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif; /* Apply a common font family */
        }

        .cont {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding-top: 100px; /* Adjusted padding to make space for the header */
        }

    

        #para {
            text-align: justify;
            padding: 0 20px; /* Adjusted padding for better readability */
            margin-top: 20px; /* Added margin top for spacing */
            color: var(--black); /* Added text color */
            font-size: 1.6rem; /* Adjusted font size */
            line-height: 2; /* Adjusted line height */
            font-family: Arial, sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .h {
            color: var(--purple);
            font-family: 'Times New Roman', Times, serif;
            font-size: 50px;
            margin-left: 10px;
            margin-right: 10px;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Add text shadow for a subtle effect */
            background-color: rgba(255, 255, 255, 0.8); /* Add background color with opacity for contrast */
            padding: 10px; /* Add padding for spacing */
            border-radius: 10px; /* Add border radius for rounded corners */
        }

  
        /* Header styles */
        :root{
    --purple:#a90cac;
    --black:#080606;
    --white:#fff;
    --light-color:#666;
    --ligt-bg:#eee;

    --box-shadow:0 .2rem .5rem rgba(158, 165, 165, 0.691); /* Adjusted box-shadow */
}

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-transform: capitalize;
   
}

*::-webkit-scrollbar{
    height: .5rem;
    width:1rem;
}

*::-webkit-scrollbar-track{
    background-color: transparent;
}

*::-webkit-scrollbar-thumb{
    background-color:var(--purple);
}

html{
    font-size:62.5%;
    overflow-x:hidden;
    scroll-behavior:smooth;
    scroll-padding-top:6.5rem;
}
section{
    padding:7rem 2rem;
}

.heading{
    text-align: center;
    font-size: 3rem;
    color: var(--black);
    text-transform: uppercase;
    
    font-family: 'Times New Roman', Times, serif;
    margin-bottom: 3rem;
}


        .header{
    padding:2rem;
    border-bottom:var(--border);
    box-shadow: var(--box-shadow); /* Applying box-shadow */
}

.header.active{
    background-color: var(--white);
    box-shadow: var(--box-shadow);
    border:0;
}



.header .logo{
    font-size:2rem;
    color:var(--black);
    text-decoration: none; /* Removing text decoration */
}

.header .logo span{
    color:var(--purple);
}

.header .nav a{
    margin:0 1rem;
    font-size:1.7rem;
    color:var(--black);
    text-decoration: none;
}

.header .nav a:hover{
    color:var(--purple);
}
        /* Footer styles */
        .footer{
    background-color:var(--ligt-bg);
}

.footer .box-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(25rem,1fr));
    gap:3rem;
}

.footer .box-container .box{

    text-align: center;
}

.footer .box-container .box i{
   height:5rem;
   width:5rem;
   border-radius:50%; 
   line-height:5rem;
   font-size: 2rem;
   background-color: var(--purple);
   color: var(--white);
   margin-bottom:1rem;
}
.footer .box-container .box h3{
font-size: 2rem;
margin:1rem 0;
color:var(--black);

}
.footer .box-container .box p{
font-size:1.5rem;
color:var(--light-color);
text-transform: none;
line-height:2;
}

    </style>
</head>
<body>

<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo">Doc<span>Sync.</span></a>
            <nav class="nav">
                <a href="index.php">Home</a>
              
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>
</header>


<div class="cont">
    <h1 class="h">Welcome to DocSync: Streamlining Healthcare Scheduling.</h1>
    
    <div id="para">


<p>At DocSync, we believe that access to healthcare should be seamless and convenient for everyone. That's why we've developed an innovative platform that simplifies the process of scheduling appointments, empowering patients to take control of their healthcare journey like never before.</p>
</div>
<div id="para">
<h3>Effortless Appointment Booking</h3>

<p>Gone are the days of long waits on hold or multiple phone calls to schedule a single appointment. With DocSync, booking an appointment is as easy as a few clicks. Our intuitive interface allows users to browse available appointment slots, select a time that works best for them, and confirm their booking—all from the comfort of their own home or on the go.</p>
</div>
<div id="para">
<h3>Enhancing Accessibility</h3>

<p>We understand that accessing healthcare services can sometimes be challenging, especially for those with busy schedules or limited mobility. That's why DocSync is designed to enhance accessibility for all patients. Whether you're a busy professional, a parent juggling multiple responsibilities, or someone with mobility issues, our platform ensures that you can easily find and book appointments that fit your needs.</p>
</div>
<div id="para">
<h3>Seamless Integration</h3>

<p>DocSync seamlessly integrates with healthcare providers' existing systems, ensuring a smooth experience for both patients and healthcare professionals. Our platform connects patients with the right providers, streamlining communication and reducing administrative burden for healthcare staff.</p>
</div>
<div id="para">
<h3>Personalized Experience</h3>

<p>At DocSync, we believe in putting patients first. That's why our platform offers a personalized experience tailored to each user's unique needs. Whether you're looking for a specific type of specialist or prefer appointments at certain times of day, DocSync provides options that cater to your preferences.</p>
</div>
<div id="para">
<h3>Innovative Technology</h3>

<p>Powered by cutting-edge technology, DocSync is at the forefront of healthcare innovation. Our platform leverages artificial intelligence and data analytics to optimize scheduling processes, improve efficiency, and deliver a superior user experience.</p>
</div>
<div id="para">
<h3>Join the DocSync Revolution</h3>

<p>Join us in revolutionizing healthcare scheduling and access. With DocSync, booking appointments is no longer a hassle—it's a seamless and empowering experience that puts patients in control of their healthcare journey. Learn more about how DocSync can benefit you and start scheduling your appointments with ease today.</p>
</div>
</div>

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

<script src="./js/script.js"></script>
</body>
</html>
