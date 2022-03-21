<?php
require_once('../models/post.php');
$post_id = $_POST['postId'];
$description=$_POST['description'];
$file_name =$_FILES['file_name']['name'];
updatePost($post_id, $description, $file_name);
header('location: /index1.php');
?>
