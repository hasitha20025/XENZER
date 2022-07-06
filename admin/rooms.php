<?php
require('Inc/essentials.php');
require('Inc/db_config.php');
// session_start();
adminLogin();

if (isset($_GET['seen'])) {

    $frm_data = filteration($_GET);
    if ($frm_data['seen'] == 'all') {
    } else {
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
        $values = [1, $frm_data['seen']];

        if (update($q, $values, 'ii')) {
            alert('success', 'Marked as read');
        } else {
            alert('error', 'Operation Failed!');
        }
    }
}

if (isset($_GET['del'])) {

    $frm_data = filteration($_GET);
    if ($frm_data['del'] == 'all') {
        $q = "DELETE FROM `user_queries`";


        if (mysqli_query($con, $q)) {
            alert('success', 'All data deleted!');
        } else {
            alert('error', 'Operation Failed');
        }
    } else {
        $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
        $values = [$frm_data['del']];

        if (delete($q, $values, 'i')) {
            alert('success', 'Data deleted!');
        } else {
            alert('error', 'Operation Failed');
        }
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Rooms</title>

    <link rel="stylesheet" href="./CSS/Style.css">
    <?php
    require('Inc/links.php');
    ?>
</head>

<body class="bg-light">

    <?php
    require('Inc/header.php');
    ?>

    <div class="container-fluid" id="main-contain">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h4 class="mb-4">ORDERED ROOMS</h4>

                <div class="class border-0 shadow-sm mb-4">
                    <div class="card-body">


                        <div class="table-responsive-md" style="height: 350px; overflow-y:scroll;">
                            <table class="table table-hover border">
                                <thead>

                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Person ID</th>
                                        <th scope="col">Person name</th>
                                        <th scope="col">Person Email</th>
                                        <th scope="col">Room ID</th>
                                        <th scope="col">Price (Rs.)</th>
                                        <th scope="col">Check In</th>
                                        <th scope="col">Check out</th>
                                    </tr>

                                </thead>

                                <tbody id="room-data">
                                    <?php
                                    $q_ordered_rooms = 'SELECT roomId FROM single_room';
                                    $data_ordered_rooms = mysqli_query($con,$q_ordered_rooms);
                                    $i=1;
                                    $current_date = date('Y-m-d'); 
                                    while($room_ordered = $data_ordered_rooms->fetch_assoc()){
                                        $no = $room_ordered['roomId'];
                                        $roomId = 'room_'.$no;
                                    
                                        $q_room = 'SELECT * FROM '.$roomId.' WHERE checkOut>"'.$current_date.'" ORDER BY orderId DESC';  // each room table
                                        $q_user = 'SELECT * FROM user_details'; // user_queries table 
                                        $q_detail_room = 'SELECT * FROM rooms';
                                       if( $data_room = mysqli_query($con,$q_room)){
                                        while($room_table_arr = $data_room->fetch_assoc()){
                                        $data_user = mysqli_query($con,$q_user);
                                        $data_detail_room = mysqli_query($con,$q_detail_room);
                                    
                                        $userId = $room_table_arr['userId'];
                                        $checkout = $room_table_arr['checkOut'];
                                        $checkin = $room_table_arr['checkIn'];
                                
                                       

                                        $start = strtotime($checkin);
                                        $end = strtotime($checkout);
                                        $date_difference = ($end-$start)/60/60/24;
                                        if ($date_difference < 0){
                                            $date_difference = $date_difference*-1;
                                        }
                                
                                    //Find the ordered room details
                                    if ($current_date <= $checkout){ 
                                        if (mysqli_num_rows($data_user) > 0){
                                            while($row_user = $data_user->fetch_assoc()){
                                                if($row_user['userID'] == $userId){
                                                    $username = $row_user['userName'];
                                                    $email = $row_user['email'];
                                                }
                                                }
                                            }
                                
                                            if (mysqli_num_rows($data_detail_room) > 0){
                                                while($row_deatil_room = $data_detail_room->fetch_assoc()){
                                                    if($row_deatil_room['roomId'] == $no){
                                                        $price = $row_deatil_room['price'] * $date_difference;
                                                    }
                                                    }
                                                }
                                
                                        }
                                
                                        if($current_date <= $checkout){
                                            echo<<<query
                                                <tr>
                                                    <td>$i</td>
                                                    <td>$userId</td>
                                                    <td>$username</td>
                                                    <td>$email</td>
                                                    <td>$no</td>
                                                    <td>$price</td>
                                                    <td>$checkin</td>
                                                    <td>$checkout</td>
                                                </tr>
                                            query;
                                            $i = $i + 1;
                                        }
                                       }
                                    }

                                    }
                                    
                                    
                                     ?>
                                </tbody>


                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php
            
        ?>

        <?php require('Inc/script.php'); ?>

</body>

</html>