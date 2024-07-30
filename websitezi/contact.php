<?php
include 'layout/header3.php'
?> 
    <main>
        <section class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.097766085011!2d67.06734167505242!3d24.860510277929322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e9f60d36339%3A0x1d64ea8b0a7ca381!2sMohammad%20Ali%20Jinnah%20University!5e0!3m2!1sen!2s!4v1717283577383!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <section class="contact-info-section">
            <h2>We are based in Karachi, Pakistan</h2>
            <div class="contact-details">
                <div class="address">
                    <h3>Address</h3>
                    <p>22-E, Block 6 P.E.C.H.S.</p>
                    <p>MAJU Road, Main Shahrah-e-Faisal,</p>
                    <p> Karachi, Karachi City, Sindh 75400, Pakistan</p>
                    <a href="#">Map →</a>
                </div>
                <div class="phone">
                    <h3>Phone</h3>
                    <p>Tel: (021) 34919955</p>
                    <p>Mobile: 0324 2636583</p>
                </div>
                <div class="hours">
                    <h3>Working Hours</h3>
                    <p>Week Days: 10:00 – 19:00</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>
        </section>
        <section class="contact-form-section">
            <form id="contact-form" method="POST">
                <input type="text" id="name" name="nam" placeholder="Name" required>
                <input type="email" id="email" name="email" placeholder="E-mail" required>
                <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                <input type="text" id="subject" name="subject" placeholder="Subject" required>
                <textarea id="message" name="message" placeholder="Your message..." required></textarea>
                <button type="submit" name="contac" >Send Message →</button>
            </form>
        </section>
    </main>
    <?php
include 'layout/footer3.php'
?> 