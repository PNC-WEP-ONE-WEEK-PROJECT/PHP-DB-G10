<?php
require_once("../models/post.php");

$id=$_GET['id'];
$deleteSuccess = deletePost($id);
if($deleteSuccess){
    header('location: /index.php');
}else{
    echo "Can't delete post with id";
}

?>
