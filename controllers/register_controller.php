
?php
    require_once ('../models/user.php');
?>


<?php

    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $job = $_POST['job'];
    $edu = $_POST['education'];
    $loca = $_POST['location'];
    $relation = $_POST['relationship'];
    $b_place = $_POST['birth_place'];

    registerAccount($first_name, $last_name, $gender, $email, $password, $job, $edu, $loca, $relation, $b_place);

?> 
