<?php 
include "config.php";
$id =  $_GET['id'];
$query = "DELETE FROM `nama` WHERE id=$id";
mysqli_query($conn,$query);
header('location:index.php');
?>