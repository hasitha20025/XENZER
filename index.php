<!------------Header--------->
<?php require('./Inc/header.php') ?>

<!------------Swipper--------->
<div class="container-fluid">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./Images/slider2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./Images/slider1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./Images/slider3.jpg" alt=""></div>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</div>
<!------------Swipper-End--------->

<!------------carousel--------->
<div class="container-fluid px-lg-4 mt-4">

</div>
<!------------check booking availability form--------->
<div class="container availability-form" data-aos="fade-up">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4">
            <h5 class="mb-4">Check Booking Availability</h5>
            <!-- <form> -->
            <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight:500 ;">Check-in</label>
                    <input id="checkIn" type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight:500 ;">Check-out</label>
                    <input id="checkOut" type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight:500;">Adult</label>
                    <input id="adult" type="number" class="form-control" placeholder="Number">
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label" style="font-weight:500;">Children</label>
                    <input id="children" type="text" type="number" class="form-control" placeholder="Number">
                </div>
                <div class="col-lg-1 mb-3">
                    <button class="btn text-white shadow-none custom-bg"
                        onclick="findRooms('roomFilterMainPage');">Submit</button>
                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>
</div>
<!------------check booking availability form - end--------->

<div class="container">
    <div class="row" id="roomFilterMainPage" data-aos="fade-up">

    </div>
</div>

<!-----------------Rooms---------------->
<div data-aos="slide-right">
    <h2 class="mt-5 pt-5 mb-4 text-center fw-light">OUR ROOMS</h2>
    <div class="container">
        <div class="row" id="roomFilterMainPageSecond">
        </div>
    </div>
</div>


<!----------------------OUR-FACILITIES--------------------->
<div data-aos="fade-up">
    <h2 class="mt-5 pt-5 mb-4 text-center fw-light">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
                <img src="./Images/caffe.jpg" alt="" width="80px">
                <h5 class="mt-3">Caffe</h5>
            </div>
            <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
                <img src="./Images/pool.png" alt="" width="80px">
                <h5 class="mt-3">Swimming Pool</h5>
            </div>
            <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
                <img src="./Images/gym.png" alt="" width="80px">
                <h5 class="mt-3">Gym</h5>
            </div>
            <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
                <img src="./Images/spa.svg" alt="" width="80px">
                <h5 class="mt-3">Spa</h5>
            </div>
            <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
                <img src="./Images/Bar.png" alt="" width="80px">
                <h5 class="mt-3">Bar</h5>
            </div>
        </div>
        <div class="col-lg-12 text-center  m-auto mt-5">
            <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More
                Facilities..</a>
        </div>
    </div>
</div>

<!-------------Testimonials-------------->
<div data-aos="slide-right">
<h2 class="mt-5 pt-5 mb-4 text-center fw-light ">" What People Say "</h2>
<div class="d-flex justify-content-center py-0" >
    <?php require('./Inc/slider.php');?>
</div>
</div>



<!------------Reach Us---------------->
<div data-aos="slide-right">
<h2 class="mt-5 pt-5 mb-4 text-center fw-light"> Reach Us</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 ">
            <iframe class="w-100" height="450"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126762.45837533647!2d80.14577239492183!3d6.851370918698644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253c87cd30f47%3A0x962a24d3843035e1!2sHotel%20Grand%20Mondo%20-%20Luxury%20Banquets!5e0!3m2!1sen!2slk!4v1654782628627!5m2!1sen!2slk"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">

            <div class="bg-white p-4 mb-4 mt-4">
                <h5>Call us</h5>
                <a href="tel:0771875764" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> 0362249181
                    <br>
                    <i class="bi bi-telephone-fill"></i> +94771875764
                </a>


            </div>
            <div class="bg-white p-4 mb-4 mt-4">
                <h5>Follow us</h5>
                <a href="tel:0771875764" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-facebook"></i> Facebook
                </a>
                <br>
                <br>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"></a>
                <i class="bi bi-instagram"></i> Instagram
                </a>
                <br>
                <br>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"></a>
                <i class="bi bi-twitter"></i> Twitter
                </a>
                <br>
                <br>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"></a>
                <i class="bi bi-instagram"></i> Instagram
                </a>


            </div>

        </div>
    </div>
</div>

</div>

<!-------footer----->
<?php require('./Inc/footer.php');
 // require('./Inc/newFooter.php')
  ?>

</body>

</html>