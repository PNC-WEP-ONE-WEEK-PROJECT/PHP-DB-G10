


<?php
require_once ('database.php');
?>

<?php
// funtion register

function registerAccount($first_name, $last_name, $gender, $email, $password, $job, $edu, $loca, $relation, $b_place){

global $db;

$statement=$db->prepare("INSERT INTO users(first_name, last_name, gender, email, password,
job, education, location, relationship, birth_place) 
VALUES (:f_name, :l_name, :gender, :email, :password,:job, :edu, :location, :relationship, :birth_place )");
$statement->execute([
    ':f_name'=>$first_name,
    ':l_name'=>$last_name,
    ':gender'=> $gender, 
    ':email'=>$email, 
    ':password'=>$password,
    ':job'=>$job,
    ':edu'=>$edu,
    ':location'=> $loca, 
    ':relationship'=>$relation, 
    ':birth_place'=>$b_place
]);
return $statement->rowCount()==1;
}
?>






