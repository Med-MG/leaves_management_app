<?php 

if(!isset($_SESSION['logged_in'])){
    header("location: ../login/index.php?error=Not Autherized");
    exit;
}
?>