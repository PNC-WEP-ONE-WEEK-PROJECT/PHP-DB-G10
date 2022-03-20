<?php
//  Get like
    function getLike($post_id,$user_id){
        global $db;
        $statement = $db -> prepare("SELECT * FROM likes");
        $like = $statement -> fetchAll();

        return $like;
    }

    function likeOnpost($post_id,$user_id){
        global $db
    }
?>






