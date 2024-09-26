<?php
session_start();

if(!isset($_SESSION['myname'])){
   header ("Location: login.php");
}
?>