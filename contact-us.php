
  <?php require('./Inc/header.php') ?>
  <?php //require('./admin/Inc/db_config.php') ?>
  <br>
  <br>
  <br><br>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT-US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Animi incidunt aut tempora consequuntur ipsam,
      enim voluptates, <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, iusto.

    </p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white  p-4 border-top border-4 border-dark pop">
          <div class="bg-white p-4">
            <iframe class="w-100 mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126762.45837533647!2d80.14577239492183!3d6.851370918698644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253c87cd30f47%3A0x962a24d3843035e1!2sHotel%20Grand%20Mondo%20-%20Luxury%20Banquets!5e0!3m2!1sen!2slk!4v1654782628627!5m2!1sen!2slk"></iframe>
            <h5 class=" fs-0">Address</h5>
            <a href="https://goo.gl/maps/fx47oZ8KWYaNiDRM9" class="d-inline-block text-decoration-none text-dark">
              <i class="bi bi-geo-alt-fill"></i> XENZER Hotel, No.52, Gota-Go gama, Collombo 07.
            </a>
            <hr>

            <h5 class="mt-3 fs-0">Call us</h5>
            <a href="tel:0771875764" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> 0362249181
              <br>
              <i class="bi bi-telephone-fill"></i> +94771875764
            </a>
            <hr>

            <h5 class="mt-3 fs-0">Email</h5>
            <a href="tel:0771875764" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-envelope-fill"></i> xenzer@gmail.com
            </a>
            <hr>

            <h5 class="mt-3 fs-0">Follow us</h5>
            <a href="www.facebook.com" class="d-inline-block mb-3  text-dark fs-0 me-2">
              <i class="bi bi-facebook tag"></i>
            </a>

            <a href="www.instagram.com" class="d-inline-block mb-3  text-dark fs-0 me-2">
              <i class="bi bi-instagram tag"></i></a>
            </a>
            <a href="www.twitter.com" class="d-inline-block mb-3  text-dark fs-0 me-2">
              <i class="bi bi-twitter tag"></i></a>
            </a>


          </div>
        </div>
      </div>


      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white  p-4 border-top border-4 border-dark pop">
          <form method="POST">
            <h5 class="mt-3 fs-0">Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input name="name" required type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input name="email" required type="Email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input name="subject" required type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea name="message" required class="form-control shadow-none" rows="5"></textarea>
            </div>
            <button name="send" type="submit" class=" btn btn-dark shadow-none mt-3">
              Send
            </button>
          </form>
        </div>
      </div>



    </div>
  </div>

  <!-------footer----->







  <?php require('./Inc/footer.php');?>
  <?php

  if (isset($_POST['send'])) {

    $frm_data = filteration($_POST);


    if (isset($_POST['send'])) {
      $name = $frm_data['name'];
      $email = $frm_data['email'];
      $subject = $frm_data['subject'];
      $message = $frm_data['message'];

      $sql = "INSERT INTO user_queries (name,email,subject,message)
      VALUES ('$name','$email','$subject','$message')";
      if (mysqli_query($con, $sql)) {
        alert('success', 'Mail sent!');
        header("Location: ./contact-us.php");
        exit();
      } else {
        alert('error', 'Server Down! Try again');
      }
      mysqli_close($con);
    }
  }
  ?>


</body>

</html>