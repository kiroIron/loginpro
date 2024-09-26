
<?php

include "includes/connaction.php";
$name = $_POST ['name'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$hashing = md5($password);


$q = "INSERT INTO users(name ,email ,password) VALUES ( '$name', '$email' , '$password')";

$result = $conn->query($q);

if($result){
header("Location: indexlogin.php");

}



?>