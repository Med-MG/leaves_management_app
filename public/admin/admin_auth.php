<?php 

if(!isset($_SESSION['admin'])){
    header("location: ../../login/index.php?error=Not Autherized");
    exit;
}
?>