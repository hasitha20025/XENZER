
  </div>
  <footer
          class="text-center text-lg-start text-white"
          style="background-color:#cacaca;"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row" style="color:rgba(0,0,0,.7);">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
            XENZER
            </h6>
            <p>
              <a href="index.php" style="color:rgba(0,0,0,.7); text-decoration: none;">Home</a>
            </p>
            <p>
              <a href="room.php" style="color:rgba(0,0,0,.7); text-decoration: none;">Room</a>
            </p>
            <p>
              <a href="contact-us.php" style="color:rgba(0,0,0,.7); text-decoration: none;">Contact</a>
            </p>
            <p>
              <a href="facilities.php" style="color:rgba(0,0,0,.7); text-decoration: none;">Facilities</a>
            </p>
            <p>
              <a href="About.php" style="color:rgba(0,0,0,.7); text-decoration: none;">About</a>
            </p>
            <p>
              <a href="gallery.php" style="color:rgba(0,0,0,.7); text-decoration: none;">Gallery</a>
            </p>
          </div>

          
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i>  XENZER Hotel, No.52, Gota-Go gama, Collombo 07.</p>
            <p><i class="fas fa-envelope mr-3"></i> xenzer@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +94771875764</p>
            <p><i class="fas fa-print mr-3"></i> +94701875764</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
               class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="https://www.facebook.com"
               role="button"
               ><i class="fab fa-facebook-f" style="color:white;"></i
              ></a>

            <!-- Twitter -->
            <a
            class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="https://twitter.com"
               role="button"
               ><i class="fab fa-twitter"  style="color:white;"></i
              ></a>

            <!-- Google -->
            <a
            class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="https://www.google.com"
               role="button"
               ><i class="fab fa-google"  style="color:white;"></i
              ></a>

            <!-- Instagram -->
            <a
            class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="https://www.instagram.com"
               role="button"
               ><i class="fab fa-instagram"  style="color:white;"></i
              ></a>

            <!-- Linkedin -->
            <a
            class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="https://sg.linkedin.com"
               role="button"
               ><i class="fab fa-linkedin-in"  style="color:white;"></i
              ></a>
            
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a style="color:rgba(0,0,0,.7);" href="#"
         >XENZER.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

<!-- End of .container -->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="./Js/main.js"></script>
  <script src="./Js/dataHandling.js"></script>
  <script src="./Js/jquery.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });


    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

