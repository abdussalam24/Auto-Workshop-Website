<?php
include 'layout/header.php'
?>    


    <div class="main-content">
        <div class="text">
            <h1>Welcome!</h1>
            <p>To the online <br> Auto Workshop</p>
        </div>
        <div class="carousel rounded-box">
            <div class="carousel-item w-full">
                <img src="pexels-shvetsa-4315572.jpg" class="w-full" alt="Tailwind CSS Carousel component" />
            </div>
            <div class="carousel-item w-full">
                <img src="pexels-artempodrez-8986047.jpg" class="w-full" alt="Tailwind CSS Carousel component" />
            </div>
            <div class="carousel-item w-full">
                <img src="pexels-cottonbro-4489707.jpg" class="w-full" alt="Tailwind CSS Carousel component" />
            </div>
            <div class="carousel-item w-full">
                <img src="pexels-shvetsa-4315571.jpg" class="w-full" alt="Tailwind CSS Carousel component" />
            </div>
            <div class="carousel-item w-full">
                <img src="pexels-artempodrez-8985915.jpg" class="w-full" alt="Tailwind CSS Carousel component" />
            </div>
            <div class="carousel-item w-full">
                <img src="pexels-cottonbro-4488646.jpg" class="w-full" alt="Tailwind CSS Carousel component" />
            </div>
            <div class="carousel-item w-full">
                <img src="pexels-cottonbro-4489737.jpg" class="w-full" alt="Tailwind CSS Carousel component" />
            </div>
        </div>
    </div>
    <div class="sec">
    <section id="services">
        <h2>Our Services</h2>
        <p>Details about the services offered.</p>
    </section>
</div>

    <div class="card card-compact w-96 bg-base-100 shadow-xl">
        <figure><img src="pexels-sleepididthis-1740919.jpg" alt="Car Wash" /></figure>
        <div class="card-body">
            <h2 class="card-title">Car Wash</h2>
            <p>Book your slot for a Car Wash </p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" id="buynow">Learn More</button>
            </div>
        </div>
    </div>

    <div class="card card-compact w-96 bg-base-100 shadow-xl">
        <figure><img src="pexels-daniel-andraski-197681005-13065690.jpg" alt="Oil Change" /></figure>
        <div class="card-body">
            <h2 class="card-title">Oil Change</h2>
            <p>Book your slot for an Oil Change</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" id="buynow1">Learn More</button>
            </div>
        </div>
    </div>

    <div class="card card-compact w-96 bg-base-100 shadow-xl">
        <figure><img src="pexels-shvetsa-4315575.jpg" alt="Engine" /></figure>
        <div class="card-body">
            <h2 class="card-title">Engine Service</h2>
            <p>Book your slot for Engine Service</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary"id="buynow2">Learn More</button>
            </div>
        </div>
    </div>

    <div class="card card-compact w-96 bg-base-100 shadow-xl">
        <figure><img src="pexels-olly-3806249.jpg" alt="Tire Change" /></figure>
        <div class="card-body">
            <h2 class="card-title">Tire Change</h2>
            <p>Book your slot for Tire Change</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary"id="buynow3">Learn More</button>
            </div>
        </div>
    </div>

    <div class="card card-compact w-96 bg-base-100 shadow-xl">
        <figure><img src="pexels-pixabay-162553.jpg" alt="Inventory" /></figure>
        <div class="card-body">
            <h2 class="card-title">Mechanical Services</h2>
            <p>Find a perfect product</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary"id="buynow4">Learn More</button>
            </div>
        </div>
    </div>

    <div class="card card-compact w-96 bg-base-100 shadow-xl">
        <figure><img src="pexels-pixabay-163064.jpg" alt="Employees" /></figure>
        <div class="card-body">
            <h2 class="card-title">Employees</h2>
            <p>Meet Our Team</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary"id="buynow5">Learn More</button>
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
include 'layout/footer.php'
?>    