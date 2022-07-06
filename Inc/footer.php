
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
            Company
            </h6>
            <p>
              <a href="about.php" style="color:rgba(0,0,0,.7); text-decoration: none;">About Us</a>
            </p>
            <p>
              <a style="color:rgba(0,0,0,.7);">Our Services</a>
            </p>
            <p>
              <a style="color:rgba(0,0,0,.7);">Privacy Policy</a>
            </p>
            <p>
              <a style="color:rgba(0,0,0,.7);">Affiliate Program</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Get Help</h6>
            <p>
              <a style="color:rgba(0,0,0,.7);">FAQ</a>
            </p>
            <p>
              <a style="color:rgba(0,0,0,.7);">Shipping</a>
            </p>
            <p>
              <a style="color:rgba(0,0,0,.7);">Returns</a>
            </p>
            <p>
              <a style="color:rgba(0,0,0,.7);">Order status</a>
            </p>
            <p>
              <a style="color:rgba(0,0,0,.7);">Payment options</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Mawanella,Sri Lanka</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 94 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 94 234 567 89</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
               class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f" style="color:white;"></i
              ></a>

            <!-- Twitter -->
            <a
            class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"  style="color:white;"></i
              ></a>

            <!-- Google -->
            <a
            class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="#!"
               role="button"
               ><i class="fab fa-google"  style="color:white;"></i
              ></a>

            <!-- Instagram -->
            <a
            class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"  style="color:white;"></i
              ></a>

            <!-- Linkedin -->
            <a
            class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="#!"
               role="button"
               ><i class="fab fa-linkedin-in"  style="color:white;"></i
              ></a>
            <!-- Github -->
            <a
            class="btn btn-floating m-1"
               style="border-radius: 30px;background-color:black;border:none"
               href="#!"
               role="button"
               ><i class="fab fa-github"  style="color:white;"></i
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

