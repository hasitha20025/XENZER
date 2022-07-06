<?php
require('db_config.php');
session_start();
if(isset($_POST['selector'])){
       if($_POST['selector']=="checkavailable"){
        $room=$_POST['data'];
        $checkRoom=$con->query("SELECT `singleRoom` FROM `single_room` WHERE roomId=".$room['roomId']);
        if($checkedRoom=mysqli_fetch_assoc($checkRoom)){
            $sql="SELECT * FROM ROOM_".$room['roomId']." WHERE NOT((checkIn>'".$room['checkInDate']."' AND checkIn>'".$room['checkOutDate']."') OR (checkOut<'".$room['checkOutDate']."' AND checkOut<'".$room['checkInDate']."'))";
            $Room=$con->query($sql);
            // echo $sql;
            if($Room!=FALSE && $roomvalied=mysqli_fetch_assoc($Room)){
                echo"booked";
            }
        }
       
    }   
    if($_POST['selector']=="roomBook"){
        $room=$_POST['data'];
        $Room=$con->query("SELECT `singleRoom` FROM `single_room` WHERE roomId=".$room['roomId']);
        if($Room!=FALSE && $singleRoom=mysqli_fetch_assoc($Room)){
            $sql="INSERT INTO ".$singleRoom['singleRoom']." (`userId`, `checkIn`, `checkOut`) VALUES (".$_SESSION['userId'].",'".$room['checkInDate']."','".$room['checkOutDate']."')";
            $con->query($sql);
            // echo"Rooom detected";
        }else{
            $sql="CREATE TABLE `xenzer_2`.`room_".$room['roomId']."` ( `orderId` INT(13) NOT NULL AUTO_INCREMENT , `userId` INT(13) NOT NULL , `checkIn` DATE NOT NULL , `checkOut` DATE NOT NULL , PRIMARY KEY (`orderId`)) ENGINE = InnoDB;";
            $con->query($sql);
            // echo"Have to creat table";
            $sql2="INSERT INTO room_".$room['roomId']." (`userId`, `checkIn`, `checkOut`) VALUES (".$_SESSION['userId'].",'".$room['checkInDate']."','".$room['checkOutDate']."')";
            $con->query($sql2);
            $con->query("INSERT INTO `single_room`(`roomId`, `singleRoom`) VALUES (".$room['roomId'].",'ROOM_".$room['roomId']."')");
        }
    }
      
}
?>