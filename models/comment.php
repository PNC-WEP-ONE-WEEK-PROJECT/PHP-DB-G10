<?php
require_once("database.php");
// Get comment

function getComments($post_id){
    global $db;
    $statement = $db->query("SELECT comment_id,comment FROM comments WHERE post_id=$post_id");
    $comments = $statement -> fetchAll();

    return $comments;
}

function createComments($comment_desc,$post_id) {
    global $db;
    $statement = $db->prepare("INSERT INTO comments(comment,post_id) VALUES (:comment_desc,:id_post)");
    $statement->execute([
        ':comment_desc'=> $comment_desc,
        ':id_post'=> $post_id
    ]);
    return ($statement -> rowCount()==1);
}

?>