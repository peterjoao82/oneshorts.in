<?php include('controls/header.php'); ?>
    <!-- <section id="sliders">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/vtu.jpg" width="100" height="400vh" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>Welcome to OnLine Calculator - Your Future Is Here</h5>
                        <h3></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/vtu2.jpg" width="100" height="400vh" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5></h5>
                        <h3></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/vtu3.jpeg" width="100" height="400vh" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5></h5>
                        <h3></h3>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section> -->
    
    <!--------controls------>
   <?php include('./selection/selection.php'); ?>
   <?php include('./selection/details.php'); ?>
    
    <section id="selectors">
        <div class="blink">
            <h2><li>Get All the Updates from VTU</li></h2> 
            <br>
            <!-- <p>Click the button</p> -->
            <marquee behavior="" direction="right">
       &nbsp; &nbsp; &nbsp; <button id="btn-col" onclick="loadvtu()" data-bs-target="blink">Live Updates and Notifications</button></marquee>
        </div>
    </section>

    <!---footer-->
   
    <script src="main.js"></script>
    <?php include('controls/footer.php'); ?>


