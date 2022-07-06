<?php require('./Inc/header.php') ;
  ?>
  <br>
  <br>
  <br><br>

 <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOM</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container m-auto">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 px-lg-0">
        <div class="bg-white  p-4 border-top border-4 border-dark">
          <div class="bg-white p-4">
            <h4>FILTERS</h4>
          </div>
          <div class="border bg-light p-3 mb-3 m-auto">
            <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
            <label class="form-label">Check-in</label>
            <input type="date" id="checkIn" class="form-control shadow-none mb-3" value="<?php echo isset($_GET['checkIn'])?$_GET['checkIn']:''?>">
            <label class="form-label">Check-out</label>
            <input type="date" id="checkOut" class="form-control shadow-none mb-3"  value="<?php echo isset($_GET['checkOut'])?$_GET['checkOut']:''?>">

          </div>

          <!-- <div class="border bg-light p-3 mb-3">
            <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
            <div class="mb-2">
              <input type="checkbox" class="form-check-input shadow none" id="f1" me-1>
              <label for="f1" class="form-check-label">Facility one</label>
            </div>
            <div class="mb-2">
              <input type="checkbox" class="form-check-input shadow none" id="f1" me-1>
              <label for="f2" class="form-check-label">Facility two</label>
            </div>
            <div class="mb-2">
              <input type="checkbox" class="form-check-input shadow none" id="f1" me-1>
              <label for="f3" class="form-check-label">Facility three</label>
            </div>
          </div> -->
          <div class="border bg-light p-3 mb-3">
            <h5 class="mb-3" style="font-size: 18px;">Guest</h5>
            <div class="d-flex">
              <div class="me-3">
                <label for="" class="form-label">Adults</label>
                <input id="adult" type="number" class="form-control" value="<?php echo isset($_GET['adults'])?$_GET['adults']:''?>">
              </div>
              <div>
                <label for="" class="form-label">Children</label>
                <input id="children" type="text" type="number" class="form-control" value="<?php echo isset($_GET['childern'])?$_GET['childern']:''?>">
              </div>
            </div>
          </div>
          <div class="border bg-light p-3 mb-3 m-auto text-center">
          <button  class="btn text-white shadow-none custom-bg" onclick="findRooms('roomFilterRoomPage');">Submit</button>
          </div>
        </div>
      </div>


      <div class="col-lg-9 col-md-12 px-4" id="roomFilterRoomPage">
        <!-- <div class="card mb-4 border-0">
          <div class="row g-0 p-3 align-item-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images\room1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
              </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Facilites</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room heater
                </span>
              </div>

              <div class="guest mb-4">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                </span>

              </div>

              <div class="Rating ">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>

              </div>
            </div>
            <div class="col-md-2 text-center mt-4">
              <h6 class="mb-4 fw-normal">Rs.20000.00 per night</h6>

              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now </a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">Read More</a>

            </div>
          </div>
        </div>
        <div class="card mb-4 border-0">
          <div class="row g-0 p-3 align-item-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images\room4.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
              </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Facilites</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room heater
                </span>
              </div>

              <div class="guest mb-4">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                </span>

              </div>

              <div class="Rating ">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>

              </div>
            </div>
            <div class="col-md-2 text-center mt-4">
              <h6 class="mb-4 fw-normal">Rs.20000.00 per night</h6>

              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now </a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">Read More</a>

            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  

<!-------footer----->
<?php require('./Inc/footer.php') ?>
</div>
</body>
</html>



  <!-------------------------------------------------Script Files------------------------------------------------->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <!-- Swiper JS -->
  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="./Js/main.js"></script>


</body>

</html> -->