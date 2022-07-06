<?php require('./Inc/header.php') ;

  if(!$userLoggedIn or !isset($_GET['roomId'])){
    redirect('index.php');
  }
  $roomId=$_GET['roomId'];
  $Room=$con->query("SELECT * FROM rooms WHERE roomId=".$roomId);

?>
<br>
<br>
<br><br>
<br><br>

<?php if($Room!=NULL){
    $room=mysqli_fetch_assoc($Room);
    $dateChackout=(strtotime($_GET['checkOut']));
    $dateChackIn=(strtotime($_GET['checkIn']));
    $days=floor(($dateChackout-$dateChackIn)/(60*60*24));
    $days=($days>=0)?$days:0;
?>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <style>
    .card {

        border: none;
    }

    .card-header {
        padding: .5rem 1rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: none;
    }

    .btn-light:focus {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5;
        box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, .5);
    }

    .form-control {

        height: 50px;
        border: 2px solid #eee;
        border-radius: 6px;
        font-size: 14px;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #039be5;
        outline: 0;
        box-shadow: none;

    }

    .input {

        position: relative;
    }

    .input i {

        position: absolute;
        top: 16px;
        left: 11px;
        color: #989898;
    }

    .input input {

        text-indent: 25px;
    }

    .card-text {

        font-size: 13px;
        margin-left: 6px;
    }

    .certificate-text {

        font-size: 12px;
    }


    .billing {
        font-size: 11px;
    }

    .super-price {

        top: 0px;
        font-size: 22px;
    }

    .super-month {

        font-size: 11px;
    }


    .line {
        color: #bfbdbd;
    }

    .free-button {

        background: #1565c0;
        height: 52px;
        font-size: 15px;
        border-radius: 8px;
    }


    .payment-card-body {

        flex: 1 1 auto;
        padding: 24px 1rem !important;

    }
    </style>
</head>


<div id="scroolInto" class="container">
    <div class="card mb-4 border-0">
        <div class="row">
            <div class="my-3 px-4">
                <h2 class="fw-bold h-font text-center"><?php echo $room['name']?></h2>
            </div>
        </div>

        <div class="row g-0 p-3 align-item-center">
            <div class="col-md-6  mb-lg-0 mb-md-0 mb-3">
                <img src="<?php echo $room['image']?>" class="img-fluid rounded-start" alt="...">
                <div class="row p-5 m-0 p-0" data-aos="slide-right">
                    <div class="col-lg-12 bg-white shadow p-4">
                        <div class="row align-items-end">
                            <div class="Rating my-3">
                                <h5 class="mb-1">Rating</h5>
                                <span class="badge rounded-pill bg-light" style="font-size:16px;">
                                    <?php for($i=0;$i<$room['rating'];$i++){
                            echo' <i class="bi bi-star-fill text-warning"></i>';
                             }?>
                                </span>

                            </div>
                            <div class="features mb-4">
                                <h5 class="mb-1">Features</h5>
                                <div style="font-size:20px">
                                    <?php  foreach(explode(",",$room['fetures']) as $feture){
                            echo '<span class="badge rounded-pill bg-light text-dark text-wrap">'.$feture.'</span>';
                            }?>
                                </div>
                            </div>

                            <div class="facilities mb-4">
                                <h5 class="mb-1">Facilites</h5>
                                <div style="font-size:20px">
                                    <?php  foreach(explode(",",$room['facilites']) as $feture){
                                echo '<span class="badge rounded-pill bg-light text-dark text-wrap">'.$feture.'</span>';
                            }?>
                                </div>
                            </div>

                            <div class="guest mb-4">
                                <h5 class="mb-1">Guest</h5>
                                <div style="font-size:20px">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        <?php echo $room['adults']?> Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        <?php echo $room['childers']?> Children
                                    </span>

                                </div>
                            </div>
                            <hr>
                            <div class="row m-0 p-0" data-aos="fade-up">
                                <div class="col-lg-12 bg-white">
                                    <div class="row align-items-end">
                                        <div>
                                            <div class="my-3 px-4">
                                                <h5 class="mb-1 text-center">About Room</h5>
                                            </div>
                                            <div>
                                                <p>
                                                    <?php echo $room['description']?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-lg-5 px-md-3 px-0">
                <div>
                    <div class="my-3 px-4">
                        <h4 class="mb-1 text-center">Rs.<?php echo $room['price'] ?>.00 per night </h4>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 bg-white shadow p-4">
                        <h4 id="availableLable" style="text-align:center;color:red"></h4>
                        <div class="row align-items-end">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" style="font-weight:500 ;">Check-in</label>
                                <input id="checkInDate" type="date" class="form-control shadow-none"
                                    value="<?php echo isset($_GET['checkIn'])?$_GET['checkIn']:''?>"
                                    onchange="onChange(<?php echo $room['price'].','.$roomId ?>);">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" style="font-weight:500 ;">Check-out</label>
                                <input id="checkOutDate" type="date" class="form-control shadow-none"
                                    value="<?php echo isset($_GET['checkOut'])?$_GET['checkOut']:''?>"
                                    onchange="onChange(<?php echo $room['price'].','.$roomId ?>);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3" data-aos="fade-up">
                    <div class="col-lg-12 bg-white shadow p-4">

                        <!---------------------Start Card Payment Box------------------------>
                        <div class="row g-3">

                            <div class="col-md-12">

                                <span>Payment Method</span>
                                <div class="card">

                                    <div class="accordion" id="accordionExample">

                                        <div class="card">
                                            <div class="card-header p-0" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                                        type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <div class="d-flex align-items-center justify-content-between">

                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <span class="mx-2">Visa Card </span>
                                                            <div class="icons">
                                                                <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                                                            </div>

                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <input type="text" class="form-control" placeholder="Paypal email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-light btn-block text-left p-3 rounded-0"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <span class="mx-2">Master card </span>
                                                            <div class="icons">
                                                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                                            </div>

                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body payment-card-body">

                                                    <div class="form-group">
                                                        <span class="font-weight-normal card-text">Card
                                                            Number</span>
                                                        <div class="input">
                                                            <i class="fa fa-credit-card"></i>
                                                            <div class="form-group">
                                                                <input id="cc-number" type="tel"
                                                                    class="form-control cc-number"
                                                                    placeholder="0000 0000 0000 0000" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3 mb-3">

                                                        <div class="col-md-6">

                                                            <span class="font-weight-normal card-text">Expiry
                                                                Date</span>
                                                            <div class="input">

                                                                <i class="fa fa-calendar"></i>
                                                                <input id="cc-exp" type="tel"
                                                                    class="form-control cc-exp" placeholder="MM/YY"
                                                                    required>

                                                            </div>

                                                        </div>


                                                        <div class="col-md-6">

                                                            <span class="font-weight-normal card-text">CVV</span>
                                                            <div class="input">

                                                                <i class="fa fa-lock"></i>
                                                                <input id="cc-cvc" type="text"
                                                                    class="form-control cc-cvc" autocomplete="cc-exp"
                                                                    placeholder="000" autocomplete="off" required>

                                                            </div>

                                                        </div>


                                                    </div>

                                                    <span class="text-muted certificate-text"><i class="fa fa-lock"></i>
                                                        Your
                                                        transaction is secured with ssl certificate</span>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!---------------------End of Card Payment Box------------------------>

                            <div class="row mt-3">
                                <div class="col-lg-6 text-center ">
                                    <div class="d-flex p-2">
                                        <h5 id="lastCost">Cost : Rs.<?php echo $days*$room['price']?>.00</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button id="checkInBtn"
                                        onclick="roomBook(<?php echo $room['price'].','.$roomId ?>);"
                                        class="btn btn-sm w-100 text-white custom-bg shadow-none">Book Now </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="px-5 m-0 p-0">

                <div class="col-lg-12 p-4 mb-4" style="background-color:#EEEEEE;" data-aos="slide-right">
                    <div class="my-3 px-4">
                        <h4 class="fw-bold h-font text-center">More Rooms</h4>
                    </div>
                    <!-- Loading From Room Filter Main Page -->
                    <div class="row" id="roomFilterMainPage">
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- hidden field -->
    <div style="display:none">
        <input id="checkIn" type="date" class="form-control shadow-none">
        <input id="checkOut" type="date" class="form-control shadow-none">
        <input id="adult" type="number" class="form-control" placeholder="Number">
        <input id="children" type="text" type="number" class="form-control" placeholder="Number">
    </div>
    <!-- hidden field -->

    <script>
    $(function($) {
        // $('[data-numeric]').payment('restrictNumeric');
        $('.cc-number').payment('formatCardNumber');
        $('.cc-exp').payment('formatCardExpiry');
        $('.cc-cvc').payment('formatCardCVC');
        // $.fn.toggleInputError = function(erred) {
        //     this.parent('.form-group').toggleClass('has-error', erred);
        //     return this;
        // };
        // $('#booking').submit(function(e) {
        //     e.preventDefault();
        //     var cardType = $.payment.cardType($('.cc-number').val());
        //     $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        //     $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment(
        //         'cardExpiryVal')));
        //     $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        //     $('.cc-brand').text(cardType);
        //     $('.validation').removeClass('text-danger text-success');
        //     $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
        // });
    });
    </script>
    <div class="modal fade" id="bookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <form> -->
                <div class="modal-body">
                    <div class="mb-3">
                        <!-- <label class="form-label">Email address</label>
                            <input type="email" id="userEmailLog" class="form-control shadow-none"> -->
                        <div class="row">
                            <div class="col-md-6">
                                <img style=" width: 100%;height: 100%; object-fit: scale-down;"
                                    src="<?php echo $room['image']?>" alt="">
                            </div>
                            <div class="col-md-6">
                                <h4 class=""><?php echo $room['name']?></h4>
                                <div id="bookedDate" class="mt-3"></div>
                            </div>
                            <div class="col-md-12 my-4 text-success text-center">
                                <h3>SUCCESSFULLY BOOKED!!</h3>
                            </div>
                        </div>
                        <div class="col-md-12 text-center  mb-2">
                            <a href="index.php" class=" btn btn-sm  text-white custom-bg shadow-none px-5">
                                OK
                            </a>
                        </div>
                    </div>
                </div>

                <!-- </form> -->

            </div>
        </div>
    </div>



    <?php
}else{
    redirect('index.php');
}
require('./Inc/footer.php');
?>
    </body>

    </html>