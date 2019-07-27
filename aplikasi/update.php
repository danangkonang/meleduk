<?php 
require "config.php";
//if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $work = $_POST['work'];
    $salary = $_POST['salary'];

    $sql = "UPDATE `nama` SET `name` = '$nama', `id_work` = '$work', `id_salary` = '$salary' WHERE `id` = $id";
    
    $update = mysqli_query($conn, $sql);
    if($update){
        header('location:index.php');
    }else {
        echo mysqli_error($conn);
    
    }
    
//}
?>