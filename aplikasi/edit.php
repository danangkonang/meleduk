<?php 
    include "config.php";
    $id =  $_GET['id'];
    $sql = "SELECT * FROM `nama` WHERE id=$id";
    $query = mysqli_query($conn,$sql);

    $data = mysqli_fetch_array($query);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-3 mb-3">
        <div class="card m-3">
            <div class="card-header">
                tambah data
            </div>
            <div class="card-body">
                <form action="update.php" method="post">
                    
                    <input type="hidden" value="<?= $data['id'] ?>" name="id">
                
                    <div class="form-grup">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" value="<?= $data['name'] ?>" name="nama" id="nama">
                    </div>

                    <label class="form-check-label mt-3" for="work">Work</label>
                    <div class="form-grup">
                        <select class="form-control" name="work" id="work">
                            <option value="1" <?php $data['id_work']=='1'?print 'selected':''; ?> >Frontend dev</option>
                            <option value="2" <?php $data['id_work']=='2'?print 'selected':''; ?>>Backend dev</option>
                        </select>
                    </div>

                    <label class="form-check-label mt-3" for="salary">salary</label>
                    <div class="form-grup">
                        <select class="form-control" name="salary" id="salary">
                            <option value="1" <?php $data['id_salary']=='1'?print 'selected':''; ?> >10.000.000</option>
                            <option value="2" <?php $data['id_salary']=='2'?print 'selected':''; ?>>12.000.000</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-success mt-5 mb-3" value="update">
                        
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    
</body>
</html>