    <?php
        // session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./CSS/dbdstyle.css">

    <body>

        <div
            class="container-fluid bg-dark text-light p-2 d-flex align-items-center justify-content-between sticky-top">
            <h3 class="mb-0" style="margin-left:10px">XENZER</h3>

            <div class="user-wrapper p-3 d-flex align-items-center justify-content-between sticky-top">
                <div class="admin-icon" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item admin-name-circle">
                            <a class="nav-link admin-name second-text fw-bold" href="settings.php" id="navbarDropdown"
                                role="button">
                                <i class="bi bi-person-circle me-2"></i><span id="admin_name">Malitha Prabhashana</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="logout.php" class="logout btn btn-light btn-sm">LOG OUT</a>
            </div>

        </div>

        <div class=" col-lg-2 bg-dark text-white  p-4 border-top border-4 border-light" id="dashboard-menu">
            <div class="bg-dark p-4">
                <h4>ADMIN PANEL</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item ">
                    <a class="nav-link  text-white" aria-current="page" href="dashbord.php">Dashboard</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link  text-white" href="user-queries.php">User Messages 
                        <?php
                     $data = mysqli_query($con,"SELECT COUNT(id) as count FROM user_queries WHERE seen=0");
                     $unReadMessages=($count = mysqli_fetch_assoc($data))?$count['count']:'0';
                     ?>
                        <spa class="badge badge-secondary unread" id="unread"> <?php echo $unReadMessages?></span>
                    </a>
                </li>
                <li class="nav-item ">
                    <?php
                        $Q_ordered_rooms = 'SELECT roomId FROM single_room';
                        $Data_ordered_rooms = mysqli_query($con,$Q_ordered_rooms);
                        $current_date = date('Y-m-d'); 
                        $roomCount=0;
                        while($room_ordered = $Data_ordered_rooms->fetch_assoc()){
                            $no = $room_ordered['roomId'];
                            $roomId = 'room_'.$no;
                            $users = mysqli_query($con,'SELECT * FROM '.$roomId.' WHERE checkOut>"'.$current_date.'"');
                            $roomCount+=mysqli_num_rows($users);
                        }
                    ?>
                    <a class="nav-link  text-white" href="rooms.php">Rooms 
                    <spa class="badge badge-secondary unread" id="unread"><?php echo $roomCount?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="settings.php" tabindex="-1" aria-disabled="true">Settings</a>
                </li>
            </ul>

        </div>

        <script>
        document.getElementById("admin_name").innerHTML = '<?php echo $_SESSION['correct_name']?>';
        // document.getElementById("unread").innerHTML = '<?php //echo $_SESSION['count']?>';
        </script>
        <!-- <script src="jquery-3.6.0.min.js"></script> -->
    </body>


    </html>