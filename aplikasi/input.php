<?php 
require "config.php";

$nama = $_POST['nama'];
$work = $_POST['work'];
$salary = $_POST['salary'];

$sql = "INSERT INTO `nama` (`id`, `name`, `id_work`, `id_salary`) VALUES 
(NULL,'$nama','$work','$salary')";

$input = mysqli_query($conn, $sql);
if($input)
{
    header('location:index.php');
}
else 
{
    echo mysqli_error($conn);
    //echo "gagal";
}
