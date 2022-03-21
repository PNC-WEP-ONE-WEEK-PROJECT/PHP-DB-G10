


<?php
    require_once("../models/comment.php");
    
// Edit comment on post




$comment_id = $_GET['commentId'];

$comment=$_GET['comment'];

updateCmt($comment_id, $comment);

<<<<<<< HEAD
header('location: /index1.php');
=======
 header('location: /index1.php');
>>>>>>> 96be251c7553a5322c5184ee458eb4e318a1199c
?>


