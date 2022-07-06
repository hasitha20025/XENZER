<?php
require('db_config.php');
session_start();
if ($_POST['enterData']=='register'){
    $sql="INSERT INTO `user_details`(`userName`, `email`, `phoneNumber`, `address`, `pinCode`, `password`, `dateOfBirth`) 
    VALUES (?,?,?,?,?,?,?)";
    $user=filteration($_POST['user']);
    $values=[$user['uName'],$user['uEmail'],$user['uPhone'],$user['uAddress'],$user['uPinCode'],$user['uPassword'],$user['uDateOfBirth']];
    enterData ($sql,$values,"ssisiss",$user);
   
}


  if ($_POST['enterData']=='logIn') {
    $user = filteration($_POST['user']);
    $query = "SELECT `userID` FROM `user_details` WHERE `email`=? AND `password`=?";
    $values = [$user['uEmail'], $user['uPassword']];

    $res = select($query, $values, "ss");

    if ($res->num_rows == 1) {  
      $row = mysqli_fetch_assoc($res);
      $_SESSION['userLogin'] = true;
      $_SESSION['userId'] = $row['userID'];
      echo"succeed";
    //   redirect('index.php');
    } else {
      echo"Incorrect Email Or password";
    }
  }


    if ($_POST['enterData']=='logOut') {
        session_destroy();
    }

  if($_POST['enterData']=='emailCheck'){
    $userEmail = filteration($_POST);
    $res = select("SELECT `userID` FROM `user_details` WHERE `email`=?", [$userEmail['userEmail']], "s");
    if ($res->num_rows == 0) {
        echo "succeed";
    } 
  }

function enterData($sql,$values,$datatypes,$user){
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql)){
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
          $res = select("SELECT `userID` FROM `user_details` WHERE `email`=?", [$user['uEmail']], "s");
          $_SESSION['userLogin'] = true;
          $_SESSION['userId'] = mysqli_fetch_assoc($res)['userID'];
          echo"succeed";
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Update");
        }
    }
    else{
        die("Query cannot be executed - Update");
    }
}

?>