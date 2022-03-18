<?php
require_once("database.php");
//
session_start();
$_SESSION['user_id'] = (int)1;
$connect = mysqli_connect("localhost","root","","like_button");

$query ="SELECT post_id FROM posts";

$result = mysqli_query($connect,$query);

// while($row = mysql_fetch_arra($result)){
//     echo''
// }







