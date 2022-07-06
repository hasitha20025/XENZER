<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>XENZER</title>
    <?php require('./Inc/links.php') ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./CSS/backend.css" />
    <script src="./Js/jquery.js"></script>
</head>

<body>
    <!------Nav-Bar----->
    <div id="fullContainer">
        <?php
   require('admin\Inc\essentials.php');
   require('admin\Inc\db_config.php');
   $userLoggedIn=FALSE;
   session_start();
    if ((isset($_SESSION['userLogin']) && $_SESSION['userLogin'] == true)) {
      $userLoggedIn=TRUE;
    }

?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">XENZER</a>
                <div>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="room.php">Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="facilities.php">Facilities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="About.php">About-Us</a>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-end" style="padding-left:30px;">
                            <?php if(!$userLoggedIn){?>
                            <button type="button" class="btn btn-outline-dark  shadow-none me-lg-3 me-3"
                                data-bs-toggle="modal" data-bs-target="#LoginModal">
                                Login
                            </button>
                            <button type="button" class="btn btn-outline-dark  shadow-none me-lg-3 me-3"
                                data-bs-toggle="modal" data-bs-target="#registerModal">
                                Register
                            </button>
                            <?php }else{ ?>
                            <button type="button" class="btn btn-outline-dark  shadow-none me-lg-3 me-3"
                                data-bs-toggle="modal" onclick="userLogOut();">
                                Log Out
                            </button>
                            <?php } ?>
                        </div>

                    </div>
                </div>
        </nav>

        <!------------------- Modal-------------------------->
        <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- <form  > -->
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with your ID. that will be required during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" id="userName" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0">
                                    <label class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input id="phoneNumber" type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input id="picture" type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea id="address" class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" id="pinCode" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Date of birth</label>
                                    <label id="dateOfBirthLabel" class="form-label"
                                        style="font-size: 12px;color:red; "></label>
                                    <input type="date" id="dateOfBirth" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <label id="passwordLabel" class="form-label"
                                        style="font-size: 9px;color:red; "></label>
                                    <!-- <input type="password" id="password" class="form-control shadow-none"> -->
                                    <input type="password" id="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Conform password</label>
                                    <label id="passConformLabel" class="form-label"
                                        style="font-size: 9px;color:red; "></label>
                                    <input type="password" id="passConform" class="form-control shadow-none">
                                </div>
                                <div class="text-center my-1">
                                    <button type="submit" class=" btn btn-dark shadow-none" onclick="submitData();">
                                        Register
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                    <!-- </form> -->

                </div>
            </div>
        </div>
        <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- <form> -->
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel">
                            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" id="userEmailLog" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <label id="passwordLogLabel" class="form-label" style="font-size: 12px;color:red; "></label>
                            <input type="password" id="passwordLog" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class=" btn btn-dark shadow-none" onclick="userLogIn();">
                                LOGIN
                            </button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                                password?</a>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>

                    <!-- </form> -->

                </div>
            </div>
        </div>

        <!-- <script src="./Js/jquery.js"></script>
  <script src="./Js/main.js"></script> -->
        <!-- <script src="./Js/main.js"></script>
  <script src="/Js/jquery.js"></script> -->