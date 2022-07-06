<?php

require('Inc/essentials.php');
adminLogin();
require('Inc/dash_connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>

    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="stylesheet" href="./admin/CSS/dbdstyle.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <?php
    require('Inc/links.php');
    ?>

    <style>
    .card {
        margin-left: 50px;
        margin-top: 1rem;
    }
    </style>
    <script src="scripts/dash_script.js"></script>
</head>



<body class="bg-light">

    <?php
    require('Inc/header.php');
    ?>

    <div class="container-fluid" id="main-contain">

        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                    <div class="row">
                        <div class="col col-lg-9">
                            <h4 class="mb-4">DASHBOARD</h4>
                        </div>

                        <!----------------- Last Login------------------>
                        <div class="col col-lg-3 last-time-login">
                            <h5>Last logged in</h5>
                            <h6 id="date"><?php echo 'Date: '.$_SESSION['current_date']?></h6>
                        </div>
                    </div>

                    </br>
                    <!----------------- Cards details strat------------------>
                    <div class="cards">
                        <div class="row">

                            <div class="card col-md-5">
                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2"><?php echo $roomCount?></h3>
                                        <p class="fs-5">Count of Ordered Rooms</p>
                                    </div>
                                    <i
                                        class="bi bi-house-fill fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                </div>
                            </div>

                            <div class="card col-md-5">
                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2" id="no_users"><?php echo $no_users?></h3>
                                        <p class="fs-5">Total Users</p>
                                    </div>
                                    <i
                                        class="bi bi-people-fill fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                </div>
                            </div>

                            <div class="card col-md-5">
                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2" id="no-read"><?php echo $unReadMessages?>
                                        </h3>
                                        <p class="fs-5">Unread Messages</p>
                                    </div>
                                    <i
                                        class="bi bi-envelope-fill fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                </div>
                            </div>

                            <div class="card col-md-5">
                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                    <div>
                                        <h3 class="fs-2" id="no_admin"><?php echo $no_admins?></h3>
                                        <p class="fs-5">Admin Count</p>
                                    </div>
                                    <i
                                        class="bi bi-person-bounding-box fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------- Cards details End------------------>

                </div>


                <!----------------- JS data changing------------------>

                <?php require('Inc/script.php'); ?>
</body>


</html>