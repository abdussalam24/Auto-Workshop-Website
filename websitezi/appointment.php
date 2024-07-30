<?php
include 'layout/header2.php'
?> 
    <main>
        <div class="appointment-container">
            <h1>Appointment</h1>
            <p>Welcome to our advanced online appointment booking system</p>
            <div class="steps">
                <div class="step active" data-step="1">1. Auto Repair Services</div>
                <div class="step" data-step="2">2. Your Availability</div>
                <div class="step" data-step="3">3. Confirmation</div>
                <div class="step" data-step="4">4. Finish</div>
            </div>
           <form id="appointment-form" method="POST" enctype="multipart/form-data">
                <div class="step-content active" data-step="1">
                    <h2>Auto Workshop Offers Free Online Appointment Booking</h2>
                    <p>Let's book your free appointment.</p>
                    <div class="form-group">
                        <label for="services" >Our Services</label>
                        <select id="services" name="ser" required>
                            <option value="">Select service</option>
                            <option value="none">None</option>
                            <option value="carWash">Car Wash</option>
                            <option value="oilChange">Oil Change</option>
                            <option value="engineService">Mechanical Services</option>
                            <option value="tireChange">Tire Change</option>
                        </select>
                        <label for="packages">Our Packages</label>
                        <select id="packages" name="pack" required>
                            <option value="">Select package</option>
                            <option value="package1">None</option>
                            <option value="package2">Basic(RS:4200)</option>
                            <option value="package3">Advanced(RS:6500)</option>
                            <option value="package4">Premium(RS:9000)</option>
                            <option value="package5">Extended(RS:6500)</option>
                        </select>
                    </div>
                </div>
                <div class="step-content" data-step="2">
                    <div class="form-group">
                        <label for="date">I'm available on or after</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="start-time">Start from</label>
                        <input type="time" id="start-time" name="start-time" required>
                        <label for="end-time">Finish by</label>
                        <input type="time" id="end-time" name="end-time" required>
                    </div>
                </div>
                <div class="step-content" data-step="3">
                    <h2>Confirmation</h2>
                    <p>Review and confirm your appointment details.</p>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="nam" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" id="Email" name="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="carName">Car Brand</label>
                        <input type="text" id="carName" name="carBrand" required>
                    </div>
                    <div class="form-group">
                        <label for="carType">Car Type</label>
                        <select id="carType" name="carType" required>
                            <option value="">Select a car type</option>
                            <option value="sedan">Sedan</option>
                            <option value="truck">Truck</option>
                            <option value="suvs">SUVs</option>
                            <option value="hybrid">Hybrid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="carNumber">Car Number</label>
                        <input type="text" id="carNumber" name="carNumber" required>
                    </div>
                </div>
                <div class="step-content" data-step="4">
                    <h2>Finish</h2>
                    <p>Thank you! Your booking is complete. An email with details of your booking has been sent to you.
                    </p>
                </div>
                <button type="submit"  name="appoint" onclick="nextStep()">Next</button>
            </form>
        </div>

        <?php
include 'layout/footer2.php'
?> 