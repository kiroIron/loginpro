<?php
include 'includes/islogin.php';
include 'includes/connaction.php';
include 'function.php';


$userid = $_SESSION ['myname']['id'];

$title = $_POST['title'];

if($_FILES['image']['error'] == 0){

    $image = uploadimg('image');

    $q ="INSERT INTO posts (title , image, userid ) VALUES ('$title','$image', $userid)";
}
else{
    $q ="INSERT INTO posts (title , userid ) VALUES ('$title', $userid)";
}




$result =$conn->query($q);

if($result){
    header ("Location: indexlogin.php");
}

?>