<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Workshop</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: white;
        }

        .top-bar {
            background-color: black;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .top-bar a  {
            text-decoration: none;
            color: #0073e6;
            font-size: 14px;
        }

        .contact-info {
            font-size: 14px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: black;
            color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo h1 {
            margin: 0;
            font-size: 30px;
            color: white;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .navbar .nav-links li {
            display: inline;
        }

        .navbar .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 10px;
        }

        .navbar .nav-links a:hover {
            border-bottom: 2px solid #0073e6;
            color: #0073e6;
        }

        .main-banner {
            background: url('pexels-cottonbro-4489761.jpg') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: #fff;
            text-align: center;
        }

        .main-banner .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .main-banner h1 {
            font-size: 3rem;
            margin: 0;
            color: #f0f0f0;
        }

        .main-banner span {
            color: #66ccff;
        }

        .main-banner p {
            color: #f0f0f0;
        }

        .about {
            padding: 2rem;
            text-align: center;
        }

        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .about h3 {
            font-size: 1.5rem;
            margin-top: 1rem;
        }

        .about p {
            margin: 1rem 0;
            line-height: 1.6;
        }

        
        .card {
            display: flex;
            flex-direction: column;
            width: 25%;
            margin: 5% 3% 1% 1%;
            transition: transform 0.2s;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            text-align: center;
            font-size: x-large;
        }

        .card-title {
            text-align: center;
            font-size: 1.8rem;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            max-height: 200px;
            object-fit: cover;
        }


        .contact {
            display: flex;
            justify-content: space-around;
            padding: 2rem;
            background: #f0f0f0;
            flex-wrap: wrap;
        }

        .contact-info,
        .working-time {
            text-align: center;
            margin: 1rem 0;
        }

        .contact-info h3,
        .working-time h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .contact-info p,
        .working-time p {
            font-size: 1rem;
            margin: 0.5rem 0;
        }

        .timeline {
            display: flex;
            justify-content: space-around;
            padding: 2rem;
            flex-wrap: wrap;
        }

        .timeline-item {
            text-align: center;
            margin: 1rem 0;
        }

        .timeline-item p {
            margin: 0.5rem 0;
            font-size: 1rem;
        }

        .footer-container {
            background-color: #222;
            color: #f8f9fa;
            padding: 50px 20px;
            font-family: 'Arial', sans-serif;
        }

        .footer-top {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 30px;
        }

        .footer-item {
            flex: 1;
            margin: 0 15px;
        }

        .footer-item i {
            font-size: 40px;
            margin-bottom: 10px;
            color: #0073e6;
        }

        .footer-item h3 {
            margin: 10px 0 5px 0;
            font-size: 22px;
            color: #f8f9fa;
        }

        .footer-item p {
            font-size: 18px;
            margin: 5px 0;
        }

        .footer-middle {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .about1,
        .services,
        .address {
            flex: 1;
            margin: 0 20px;
            max-width: 300px;
        }

        .about1 p,
        .address p {
            margin: 10px 0;
            line-height: 1.5;
            color: #f8f9fa;
        }

        .services ul {
            list-style: none;
            padding: 0;
        }

        .services li {
            margin: 5px 0;
        }

        .services a,
        .address a,
        .footer-item a {
            text-decoration: none;
            color: #0073e6;
            transition: color 0.3s;
        }

        .services a:hover,
        .address a:hover,
        .footer-item a:hover {
            color: #005bb5;
        }

        .footer-bottom {
            background-color: #111;
            color: #bbb;
            padding: 20px 0;
            text-align: center;
            border-top: 1px solid #444;
        }

        .footer-bottom p {
            margin: 0;
            font-size: 16px;
        }

        .footer-bottom a {
            color: #0073e6;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-bottom a:hover {
            color: #005bb5;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            color: #bbb;
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #f8f9fa;
        }

        @media (max-width: 768px) {
            .main-banner h1 {
                font-size: 2rem;
            }

            .about {
                padding: 1rem;
            }

            .contact {
                flex-direction: column;
                padding: 1rem;
            }

            .timeline {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="top-bar">
            <a href="#" id="appointment">Get free appointment with the mechanic →</a>
            <div class="contact-info">
                <span>Call us now: <a href="tel:02134919955">(021) 3491 9955</a></span> |
                <a href="#" class="map">Find us on map →</a>
            </div>
        </div>
        <nav class="navbar">
            <div class="logo">
                <h1>Auto Workshop</h1>
            </div>
            <ul class="nav-links">
            <li><a href="#" id="home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#" id="Offer">Offers</a></li>
            <li><a href="#" id="appointment">Appointment</a></li>
            <li><a href="#" id="about">About</a></li>
            <li><a href="#" id="contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="main-banner">
        <div class="overlay">
            <div class="header-content">
                <h1>Rev Up Your <span>Passion</span>: Drive with Love, Drive with Us!</h1>
                <p>Auto Workshop</p>
            </div>
        </div>
    </div>
    <main>
        <section class="about">
            <h2>About Auto Workshop Employees</h2>
            <div class="flex flex-wrap justify-center gap-6">
                <div class="card card-compact w-96 bg-base-100 shadow-xl">
                    <figure><img src="WhatsApp Image 2024-06-05 at 1.40.28 PM.jpeg" alt="Car Wash" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">M.Abdussalam</h2>
                        <p>Backend </p>
                        <div class="card-actions justify-end">
                        </div>
                    </div>
                </div>
                <div class="card card-compact w-96 bg-base-100 shadow-xl">
                    <figure><img src="IMG-20231125-WA0073-Photoroom.png" alt="Oil Change" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Irtiza Ahmed</h2>
                        <p>Frontend</p>
                        <div class="card-actions justify-end">
                        </div>
                    </div>
                </div>
                <div class="card card-compact w-96 bg-base-100 shadow-xl">
                    <figure><img src="WhatsApp Image 2024-06-05 at 1.33.58 PM.jpeg" alt="Engine" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Amman Ullah Azhar</h2>
                        <p>Frontend</p>
                        <div class="card-actions justify-end">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="contact-info">
                <h3>Call Now</h3>
                <p>(021) 34919955</p>
                <p>Mobile: 0324 2636583</p>
            </div>
            <div class="working-time">
                <h3>Working time</h3>
                <p>WEEK DAYS: 10:00 – 19:00</p>
                <p>SUNDAY: CLOSED</p>
            </div>
        </section>
        
        <section class="timeline">
            <div class="timeline-item">
                <p>1980</p>
                <p>Start with basic service</p>
            </div>
            <div class="timeline-item">
                <p>2005</p>
                <p>Get two shops in Gulshan</p>
            </div>
            <div class="timeline-item">
                <p>2018</p>
                <p>Workshop go online</p>
            </div>
        </section>
        <footer>
            <div class="footer-container">
                <div class="footer-top">
                    <div class="footer-item">
                        <i class="fa fa-envelope"></i>
                        <h3>Get Free</h3>
                        <p>APPOINTMENT</p>
                    </div>
                    <div class="footer-item">
                        <i class="fa fa-phone"></i>
                        <h3>Call Now</h3>
                        <p>0318 0206408</p>
                    </div>
                    <div class="footer-item">
                        <i class="fa fa-tag"></i>
                        <h3>View Our</h3>
                        <p>TOP OFFERS</p>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="about1">
                        <h3>About</h3>
                        <p>Auto Workshop is a general automobile repair workshop with an excellent reputation for
                            providing best quality services. We are based in Karachi, Pakistan...</p>
                        <a href="#" id="read">Read more...</a>
                    </div>
                    <div class="services">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#" id="car">Car Wash</a></li>
                            <li><a href="#" id="oil">Oil change</a></li>
                            <li><a href="#" id="engine">Engine Service</a></li>
                            <li><a href="#" id="mechani">Mechanical Service</a></li>
                        </ul>
                    </div>
                    <div class="address">
                        <h3>Address</h3>
                        <p>MAJU Road, Main Shahrah-e-Faisal, 22-E, Block 6 P.E.C.H.S., Karachi, Karachi City, Sindh 75400, Pakistan</p>
                <p>Tel: (021) 34575947<br>Cell: 0318 0206408</p>
                        <a href="#" id="map1">Get directions on the map</a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>© 2021 Auto Workshop by <a href="#">CreativeWave</a></p>
                    <!-- <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-search"></i></a>
                </div> -->
                </div>
            </div>
        </footer>
    </main>
    <script>
document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.nav-links a[href^="#"]');

    document.getElementById('home').addEventListener('click', function() {
    window.location.href = 'index.php';  // Navigate to the About page
});    
document.getElementById('Offer').addEventListener('click', function() {
    window.location.href = 'offers.php';  // Navigate to the About page
});

document.getElementById('about').addEventListener('click', function() {
    window.location.href = 'about.php';  // Navigate to the About page
});

document.getElementById('appointment').addEventListener('click', function() {
    window.location.href = 'appointment.php';  // Navigate to the About page
});
document.getElementById('contact').addEventListener('click', function() {
    window.location.href = 'contact.php';  // Navigate to the About page
});
document.getElementById('map').addEventListener('click', function() {
    window.location.href = 'contact.php';  // Navigate to the About page
});
document.getElementById('map1').addEventListener('click', function() {
    window.location.href = 'contact.php';  // Navigate to the About page
});
document.getElementById('app').addEventListener('click', function() {
    window.location.href = 'appointment.php';  // Navigate to the About page
});
document.getElementById('read').addEventListener('click', function() {
            window.location.href = 'about.php';  
});
document.getElementById('car').addEventListener('click', function() {
    window.location.href = 'Car_wash.php';  // Navigate to the About page
});
document.getElementById('oil').addEventListener('click', function() {
    window.location.href = 'Oil_change.php';  // Navigate to the About page
});
document.getElementById('engine').addEventListener('click', function() {
    window.location.href = 'Engine_service.php';  // Navigate to the About page
});
document.getElementById('mechanic').addEventListener('click', function() {
    window.location.href = 'Mechanical_service.php';  // Navigate to the About page
});
    
});
    </script>
</body>

</html>
