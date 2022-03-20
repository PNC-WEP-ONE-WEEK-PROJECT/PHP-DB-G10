<?php
    require_once("../models/like.php");

    $post_id = $_GET['post_id'];
    createComments($post_id,1);

    header('location:/index.php');
?>