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
        </div>
    </div>
</footer>


<script>
    // document.getElementById('contact-form').addEventListener('submit', function(event) {
    //     event.preventDefault();
    //     alert('Message sent successfully!');
    // });

    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('.nav-links a[href^="#"]');
        // header
        document.getElementById('read').addEventListener('click', function() {
            window.location.href = 'about.php';
        });
        document.getElementById('home').addEventListener('click', function() {
            window.location.href = 'index.php';
        });
        document.getElementById('about').addEventListener('click', function() {
            window.location.href = 'about.php'; // Navigate to the About page
        });
        document.getElementById('offers').addEventListener('click', function() {
            window.location.href = 'offers.php'; // Navigate to the About page
        });
        document.getElementById('appointment').addEventListener('click', function() {
            window.location.href = 'appointment.php';
        });
        document.getElementById('contact').addEventListener('click', function() {
            window.location.href = 'contact.php';
        });
        // footer
        document.getElementById('map').addEventListener('click', function() {
            window.location.href = 'contact.php';
        });
        document.getElementById('car').addEventListener('click', function() {
            window.location.href = 'Car_wash.php';
        });
        document.getElementById('oil').addEventListener('click', function() {
            window.location.href = 'Oil_change.php';
        });
        document.getElementById('engine').addEventListener('click', function() {
            window.location.href = 'Engine_service.php';
        });
        document.getElementById('mechani').addEventListener('click', function() {
            window.location.href = 'Mechanical_service.php';
        });
    });
</script>
</body>

</html>

<?php
include 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['contac'])) {
    $Name = $_POST['nam'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];

    $sql = "INSERT INTO contact (Name, Email, Phone, Subject, Message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $Name, $Email, $Phone, $Subject, $Message);

    if ($stmt->execute()) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'asalamsalim94@gmail.com';
            $mail->Password = 'jzmo yyna tgxj mfqk';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('Developer@autoworkshop.com', 'Contact');
            $mail->addAddress($Email, $Name);
            $mail->addBCC('sp23bscs0213@maju.edu.pk');
            $mail->addReplyTo('muhammadabdussalam593@gmail.com', 'Contact Reply');


            $mail->isHTML(true);
            $mail->Subject = 'Contact Received';
            $mail->Body    = "Dear $Name,<br>Thanks for Contacting Us.<br><br>Details:<br>Phone: $Phone<br>Subject: $Subject<br>Message: $Message";
            $mail->AltBody = "Dear $Name,\nThanks for Contacting Us.\n\nDetails:\nPhone: $Phone\Subject: $Subject\Message: $Message";

            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>