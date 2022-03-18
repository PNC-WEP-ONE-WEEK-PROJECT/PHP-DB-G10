<?php
require_once("database.php");
// get user from databases
function getuser() {
    global $db;
    $statement = $db -> query("SELECT user_id,first_name,last_name,gender,email,password from users");
    $users = $statement -> fetch();
    return $users;
}
//get post from databases
function getPost() {
    global $db;
    $statement = $db -> query("SELECT post_id,Description,image,user_id, post_date from posts order by post_id desc");
    $posts = $statement -> fetchAll();
    return $posts;
}
// get data from create 
function createPost($post_description, $file_name){

    $target = "../uploads/".$_FILES['file_name']['name'];
    move_uploaded_file($_FILES['file_name']['tmp_name'],$target);

    global $db;

    $statement=$db->prepare("INSERT INTO posts(description, image) VALUES (:post_desc,:image)");
    $statement->execute([
        ':post_desc'=>$post_description,
        ':image'=>$file_name
    ]);
    return $statement->rowCount()==1;
}
//delete posts
function deletePost($id)
{
    global $db;
    $statement=$db->prepare("DELETE FROM posts WHERE post_id=:post_id");
    $statement->execute([
        ':post_id' => $id,
    ]);
    return ($statement->rowCount()==1);
}
?>