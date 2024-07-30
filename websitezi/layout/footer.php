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
                <div class="about">
                    <h3>About</h3>
                    <p>Auto Workshop is a general automobile repair workshop with an excellent reputation for providing best quality services. We are based in Karachi, Pakistan...</p>
                    <a id="read" href="#">Read more...</a>
                </div>
                <div class="services">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#" id="car">Car Wash</a></li>
                        <li><a href="#" id="oil">Oil change</a></li>
                        <li><a href="#" id="engine">Engine Service</a></li>
                        <li><a href="#" id="mechanic">Mechanical Service</a></li>
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
    
 
</body>

</html>
    <script>
        function changePage(url) {
  window.location.href = url;
}

const changePageButton = document.getElementById("buynow");
changePageButton.addEventListener("click", function() {
  changePage("Car_wash.php"); // Replace with your actual URL
});
const changePageButton1 = document.getElementById("buynow1");
changePageButton1.addEventListener("click", function() {
  changePage("Oil_change.php"); // Replace with your actual URL
});
const changePageButton2 = document.getElementById("buynow2");
changePageButton2.addEventListener("click", function() {
  changePage("Engine_service.php"); // Replace with your actual URL
});
const changePageButton3 = document.getElementById("buynow3");
changePageButton3.addEventListener("click", function() {
  changePage("Tire_change.php"); // Replace with your actual URL
});
const changePageButton4 = document.getElementById("buynow4");
changePageButton4.addEventListener("click", function() {
  changePage("Mechanical_service.php"); // Replace with your actual URL
});
const changePageButton5 = document.getElementById("buynow5");
changePageButton5.addEventListener("click", function() {
  changePage("employees.php"); // Replace with your actual URL
});

document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.nav-links a[href^="#"]');

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
    
    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});

 
    </script>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['enquiry'])) {
    $name = $_POST['nam'];
    $phone = $_POST['phone'];
    $brand = $_POST['brand'];
    $email = $_POST['mail'];
    $desc = $_POST['desc'];

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_name = basename($_FILES['file']['name']);
        $upload_dir = "uploads/";
        $file_path = $upload_dir . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
            $file_uploaded = true;
        } else {
            $file_uploaded = false;
            echo "File upload failed.";
        }
    }

    $sql = "INSERT INTO enquiries (name, phone, brand, email, description, file_path) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $phone, $brand, $email, $desc, $file_path);

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

            $mail->setFrom('Developer@autoworkshop.com', 'Enquiry');
            $mail->addAddress($email, $name);
            $mail->addBCC('sp23bscs0213@maju.edu.pk');
            $mail->addReplyTo('muhammadabdussalam593@gmail.com', 'Enquiry Reply');

            if ($file_uploaded) {
                $mail->addAttachment($file_path);
            }

            $mail->isHTML(true);
            $mail->Subject = 'Enquiry Received';
            $mail->Body    = "Dear $name,<br>Your enquiry has been received.<br><br>Details:<br>Phone: $phone<br>Brand: $brand<br>Description: $desc";
            $mail->AltBody = "Dear $name,\nYour enquiry has been received.\n\nDetails:\nPhone: $phone\nBrand: $brand\nDescription: $desc";

            $mail->send();
            echo 'Message has been sent';
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
