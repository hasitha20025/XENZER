<?php
    require('db_config.php');
    // session_start();

    // get total user count
    $q_user = 'SELECT * FROM user_details';
    $users = mysqli_query($con, $q_user);
    $no_users = mysqli_num_rows($users);

    // get total admin count
    $q_admin = 'SELECT * FROM admin_cred';
    $admins = mysqli_query($con, $q_admin);
    $no_admins = mysqli_num_rows($admins);

?>