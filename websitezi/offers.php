<?php
include 'layout/header1.php'
?> 
<div class="offers">
    <h1>Offers</h1>
    <h2>Get the best discounts now</h2>
    <div class="card-container">
        <div class="card basic">
            <div class="header">
                <h3>Combo Offer!</h3>
                <h2>RS.4200</h2>
            </div>
            <div class="details">
                <h4>Basic</h4>
                <ul>
                    <li>Computerized scanning</li>
                    <li>Throttle body service</li>
                    <li>Injector cleaning</li>
                    <li>Spark plugs cleaning and gapping</li>
                    <li>All filters, oil, coil & leakage inspection</li>
                    <li>MAP, MAF, O2 or IAT Sensor cleaning</li>
                    <li>Brakes service</li>
                </ul>
                <button onclick="bookAppointment()" class="App">Get Free Appointment Now!</button>
            </div>
        </div>
        <div class="card advanced">
            <div class="header">
                <h3>Combo Offer!</h3>
                <h2>RS.6500</h2>
            </div>
            <div class="details">
                <h4>Advanced</h4>
                <ul>
                    <li>Computerized scanning</li>
                    <li>Throttle body service</li>
                    <li>Injector cleaning</li>
                    <li>Spark plugs cleaning and gapping</li>
                    <li>All filters, oil, coil & leakage inspection</li>
                    <li>MAP, MAF, O2 or IAT Sensor cleaning</li>
                    <li>Catalytic converter cleaning</li>
                    <li>Brakes service</li>
                </ul>
                <button onclick="bookAppointment()" class="App">Get Free Appointment Now!</button>
            </div>
        </div>
        <div class="card premium">
            <div class="header">
                <h3>Combo Offer!</h3>
                <h2>RS.9000</h2>
            </div>
            <div class="details">
                <h4>Premium</h4>
                <ul>
                    <li>Computerized scanning</li>
                    <li>Throttle body service</li>
                    <li>Injector cleaning</li>
                    <li>Spark plugs cleaning and gapping</li>
                    <li>All filters, oil, coil & leakage inspection</li>
                    <li>MAP, MAF, O2 or IAT Sensor cleaning</li>
                    <li>Catalytic converter cleaning</li>
                    <li>EGR Cleaning</li>
                    <li>Brakes service</li>
                </ul>
                <button onclick="bookAppointment()" class="App">Get Free Appointment Now!</button>
            </div>
        </div>
        <div class="card advanced">
            <div class="header">
                <h3>Combo Offer!</h3>
                <h2>RS.6500</h2>
            </div>
            <div class="details">
                <h4>Extended</h4>
                <ul>
                    <li>Computerized scanning</li>
                    <li>Throttle body service</li>
                    <li>Injector cleaning</li>
                    <li>Spark plugs cleaning and gapping</li>
                    <li>All filters, oil, coil & leakage inspection</li>
                    <li>MAP, MAF, O2 or IAT Sensor cleaning</li>
                    <li>Catalytic converter cleaning</li>
                    <li>Brakes service</li>
                    <li>EGR Cleaning</li>
                    <li>Engine decarbonizing or intake valve cleaning</li>
                </ul>
                <button onclick="bookAppointment()" class="App">Get Free Appointment Now!</button>
            </div>
        </div>
    </div>
</div>

<section class="enquiry-section">
    <div class="form-container">
        <h2>Quick Enquiry</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="nam" placeholder="Name" required>
                <input type="text" name="phone" placeholder="Phone" required>
                <select type="text" name="brand" placeholder="Brand" required>
                    <option value="">Brand</option>
                    <option value="sedan">Suzuki</option>
                    <option value="truck">Honda</option>
                    <option value="suvs">Toyota</option>
                    <option value="hybrid">Kia</option>
                </select>
            </div>
            <div class="form-group">
                <input type="email" name="mail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea name="desc" placeholder="Case Description..." required></textarea>
            </div>
            <div class="form-group">
                <label for="file-upload" class="custom-file-upload">
                    Attach photo
                    <input id="file-upload" name="file" type="file">
                </label>
            </div>
            <button type="submit" name="enquiry">Send →</button>
        </form>
    </div>
    <div class="image-container">
        <img src="person-fotor-bg-remover-20240525142154.png" alt="Mechanic">
    </div>
</section>
<?php
include 'layout/footer1.php'
?> 