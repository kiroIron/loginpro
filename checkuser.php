<?php

include "includes/connaction.php";

$email = $_POST ['email'];
$password = $_POST ['password'];

$hashing = md5($password);


$q = "SELECT * FROM users WHERE email ='$email' AND password ='$hashing';";

$result = $conn->query($q);
$user = $result->fetch_assoc();

if($result->num_rows == 1){

session_start();

$_SESSION['myname'] = $user['name'];

header("Location: indexlogin.php");

}
else {
    echo "USER/PASSWORD OR EMAIL DOESN'T MATCH";
}
?>