<?php
    require_once("../models/like.php");
    $post_id = $_GET['post_id'];
    likeOnpost($post_id,3);

    header('location:/index1.php');
?>