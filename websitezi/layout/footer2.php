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
    let currentStep = 1;

    function nextStep() {
        const totalSteps = document.querySelectorAll('.step').length;
        const form = document.getElementById('appointment-form');
        const stepContent = document.querySelector(`.step-content[data-step="${currentStep}"]`);

        // Check if all required fields in the current step are filled
        const inputs = stepContent.querySelectorAll('input[required], select[required]');
        let allFilled = true;
        inputs.forEach(input => {
            if (!input.value) {
                allFilled = false;
            }
        });

        if (!allFilled) {
            alert('Please fill all required fields.');
            return;
        }

        if (currentStep < totalSteps) {
            document.querySelector(`.step[data-step="${currentStep}"]`).classList.remove('active');
            document.querySelector(`.step-content[data-step="${currentStep}"]`).classList.remove('active');
            currentStep++;
            document.querySelector(`.step[data-step="${currentStep}"]`).classList.add('active');
            document.querySelector(`.step-content[data-step="${currentStep}"]`).classList.add('active');
        } else {
            form.submit();
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('.nav-links a[href^="#"]');
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
        document.getElementById('contact').addEventListener('click', function() {
            window.location.href = 'contact.php'; // Navigate to the About page
        });
        document.getElementById('appointment').addEventListener('click', function() {
            window.location.href = 'appointment.php';
        });
        document.getElementById('contact').addEventListener('click', function() {
            window.location.href = 'contact.php';
        });
        document.getElementById('map').addEventListener('click', function() {
            window.location.href = 'contact.php';
        });
        document.getElementById('map1').addEventListener('click', function() {
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
</script>

<?php

include 'config.php';

// PHPMailer and other dependencies
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


if (isset($_POST['appoint'])) {
    $Name = $_POST['nam'];
    $Email = $_POST['Email'];
    $Phone = $_POST['phone'];
    $Address = $_POST['address'];
    $Type = $_POST['carType'];
    $C_Brand = $_POST['carBrand'];
    $C_Num = $_POST['carNumber'];
    $Service = $_POST['ser'];
    $Package = $_POST['pack'];
    $Date = $_POST['date'];
    $S_time = $_POST['start-time'];
    $F_time = $_POST['end-time'];



    $sql = "INSERT INTO appointment (Name, Email, Phone, Address, Type, C_Brand, C_num, Service, Package, Date, S_time, F_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }

    $stmt->bind_param("ssssssssssss", $Name, $Email, $Phone, $Address, $Type, $C_Brand, $C_Num, $Service, $Package, $Date, $S_time, $F_time);

    if ($stmt->execute()) {
        echo "New record created successfully";

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'asalamsalim94@gmail.com';
            $mail->Password = 'jzmo yyna tgxj mfqk';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('Developer@autoworkshop.com', 'Appointment');
            $mail->addAddress($Email, $Name);
            $mail->addBCC('sp23bscs0213@maju.edu.pk');
            $mail->addReplyTo('muhammadabdussalam593@gmail.com', 'Appointment Reply');

            $mail->isHTML(true);
            $mail->Subject = 'Appointment Booked';
            $mail->Body    = "Dear $Name,<br>Your Appointment has been booked.<br><br>Details:<br>Phone: $Phone<br>Address: $Address<br>Car_Type: $Type<br>Car_Brand: $C_Brand<br>Car_Number: $C_Num<br>Service: $Service<br>Package: $Package<br>Date: $Date<br>Starting_Time: $S_time<br>Ending_Time: $F_time";
            $mail->AltBody = "Dear $Name,\nYour Appointment has been booked.\n\nDetails:\nPhone: $Phone\nAddress: $Address\nCar_Type: $Type\nCar_Brand: $C_Brand\nCar_Number: $C_Num\nService: $Service\nPackage: $Package\nDate: $Date\nStarting_Time: $S_time\nEnding_Time: $F_time";

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>