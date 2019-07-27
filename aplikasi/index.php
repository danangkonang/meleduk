<?php 
include "config.php";
$query = mysqli_query($conn, "SELECT nama.id,nama.name as nama,
                                    work.name as work,
                                    kategori.salary 
                                    FROM nama 
                                    JOIN work ON work.id_salary = nama.id_work 
                                    JOIN kategori ON kategori.id = nama.id_salary
                                    ORDER BY id ASC");
// var_dump($query);
// die;
// if($query){
//     echo "oke";
// }else {
//     echo mysqli_error($conn);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <div class="container-fluid mt-3">
        <!--div class="card"-->
        <a href="tambah.php" class="btn btn-success mb-3 mt-2" role="button">tambah</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama</th>
                        <th scope="col">work</th>
                        <th scope="col">salary</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i=1;
                    
                    // print_r($data);
                    // die;
                    while($data = mysqli_fetch_assoc($query)){ ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['work'] ?></td>
                        <td><?php echo $data['salary'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['id'] ?>" class="btn btn-warning" role="button">edit</a>
                            <a href="hapus.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" role="button">hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <!--/div-->
    </div>
</body>
</html>