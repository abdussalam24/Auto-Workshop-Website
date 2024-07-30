<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mechanical Service </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #2b353f;
        color: white;

    }

    .top-bar {
        background-color: rgb(35, 33, 33);
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .top-bar a {
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
        background-color: #343a40;
        color: #f8f9fa;
    }

    .logo h1 {
        margin: 0;
        font-size: 24px;
    }

    .nav-links {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    .nav-links li {
        display: inline;
    }

    .nav-links a {
        text-decoration: none;
        color: white;
        font-size: 16px;
    }

    .nav-links a:hover {
        border-bottom: 2px solid #0073e6;
        color: #0073e6;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .header {
        background-color: #2a4e90;
        color: white;
        padding: 20px;
        text-align: center;
    }

    .content {
        display: flex;
        align-items: center;
        padding: 20px 0;
    }

    .text-content {
        flex: 1;
        padding-right: 20px;
        font-size: larger;
    }

    .image-content {
        flex: 1;
    }

    .image-content img {
        max-width: 100%;
        height: auto;
    }

    .service-info {
        padding: 20px 0;
    }

    .service-info h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .service-info p {
        font-size: 16px;
        line-height: 1.5;
    }

    .footer-container {
        background-color: #222;
        color: #f8f9fa;
        padding: 50px 20px;
        margin-top: 10%;
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

    .about,
    .services,
    .address {
        flex: 1;
        margin: 0 20px;
        max-width: 300px;
    }

    .about p,
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

        .footer-top,
        .footer-middle {
            flex-direction: column;
            align-items: center;
        }

        .about,
        .services,
        .address {
            margin: 20px 0;
            max-width: 100%;
            text-align: center;
        }

        .social-icons a {
            margin: 5px;
        }
    }
</style>

<body>
    <header>
        <div class="top-bar">
            <a href="#">Get free appointment with the mechanic →</a>
            <div class="contact-info">
                <span>Call us now: <a href="tel:02134919955">(021) 3491 9955</a></span> |
                <a href="#">Find us on map →</a>
            </div>
        </div>
        <nav class="navbar">
            <div class="logo">
                <h1>Auto Workshop</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#" id="Offer">Offers</a></li>
                <li><a href="#" id="appointment">Appointment</a></li>
                <li><a href="#" id="about">About</a></li>
                <li><a href="#" id="contact">Contact</a></li>
            </ul>

        </nav>
    </header>
    <main>
        <div class="container">
            <header class="header">
                <h1>Mechanical Services</h1>
            </header>
            <section class="content">
                <div class="text-content">
                    <p>
                        Regular <strong>Mechanical Services</strong> maintain the mechanical health of your vehicle is crucial for ensuring its longevity, performance, and safety. Our comprehensive <strong>Mechanical Services</strong> are designed to address all aspects of your vehicle’s mechanical systems, providing you with peace of mind and a smooth driving experience.
                    </p>
                    <p>
                        Our mechanical services start with thorough diagnostic tests using state-of-the-art equipment. We identify any issues in your vehicle's engine, transmission, brakes, suspension, and other critical systems. Early detection of problems allows for timely repairs and prevents minor issues from turning into major, costly ones.
                    </p>
                </div>
                <div class="image-content">
                    <img src="pexels-mikebirdy-188777.jpg" alt="Oil Change">
                </div>
            </section>
            <section class="service-info">
                <h2>Get an Mechanical Service in Karachi</h2>
                <p>
                    <strong>Mechanical Service</strong> Regular mechanical services ensure your vehicle operates safely and efficiently. They help prevent unexpected breakdowns, extend the lifespan of your vehicle, improve fuel efficiency, and maintain optimal performance. Proper maintenance also enhances your vehicle’s resale value by keeping it in top condition.
                </p>
                <h2>
                    Auto Workshop Offers Affordable And Reliable Mechanical Service.
                </h2>
                <P>
                    We can provide the complete Mechanical Service of your car, you do not need to pay high prices for your issues to be resolved. We can do it at very reasonable prices in Karachi.
                </P>
            </section>
        </div>

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
                        <p>0344 2139413</p>
                    </div>
                    <div class="footer-item">
                        <i class="fa fa-tag"></i>
                        <h3>View Our</h3>
                        <p>TOP OFFERS</p>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="about">
                        <h3>About</h3>
                        <p>Auto Workshop is a general automobile repair workshop with an excellent reputation for providing best quality services. We are based in Karachi, Pakistan...</p>
                        <a id="read" href="#">Read more...</a>
                    </div>
                    <div class="services">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Mechanic</a></li>
                            <li><a href="#">Engine</a></li>
                            <li><a href="#">Repair</a></li>
                            <li><a href="#">Diagnostic</a></li>
                            <li><a href="#">Oil</a></li>
                            <li><a href="#">Overhaul</a></li>
                        </ul>
                    </div>
                    <div class="address">
                        <h3>Address</h3>
                        <p>MAJU Road, Main Shahrah-e-Faisal, 22-E, Block 6 P.E.C.H.S., Karachi, Karachi City, Sindh 75400, Pakistan</p>
                        <p>Tel: (021) 34575947<br>Cell: 0318 0206408</p>
                        <a href="#">Get directions on the map</a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>© 2021 Auto Workshop by <a href="#">CreativeWave</a></p>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('.nav-links a[href^="#"]');

            document.getElementById('Offer').addEventListener('click', function() {
                window.location.href = 'offers.php'; // Navigate to the About page
            });

            document.getElementById('about').addEventListener('click', function() {
                window.location.href = 'about.php'; // Navigate to the About page
            });

            document.getElementById('appointment').addEventListener('click', function() {
                window.location.href = 'appointment.php'; // Navigate to the About page
            });
            document.getElementById('contact').addEventListener('click', function() {
                window.location.href = 'contact.php'; // Navigate to the About page
            });
            document.getElementById('read').addEventListener('click', function() {
                window.location.href = 'about.php';
            });
        });
    </script>
</body>

</html>