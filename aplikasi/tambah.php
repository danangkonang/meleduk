<?php 
require "config.php";
$query = mysqli_query($conn, "SELECT * FROM  work");
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

                <form action="input.php" method="post">
                    
                    <div class="form-grup">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    
                    <label class="form-check-label mt-3" for="work">work</label>
                    <div class="form-grup">
                        <select class="form-control" name="work" id="work">
                        <?php while($data = mysqli_fetch_assoc($query)){ ?>
                            <option value="<?= $data['id_salary'] ?>"><?= $data['name'] ?></option>
                        <?php } ?>
                        </select>
                    </div>

                    <?php $query2 = mysqli_query($conn, "SELECT * FROM  kategori"); ?>

                    <label class="form-check-label mt-3" for="salary">salary</label>
                    <div class="form-grup">
                        <select class="form-control" name="salary" id="salary">
                        <?php while($data2 = mysqli_fetch_assoc($query2)){ ?>
                            <option value="<?= $data2['id'] ?>"><?= number_format($data2['salary']) ?></option>
                        <?php } ?>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-success mt-3 mb-3" value="tambah">
                        
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    
</body>
</html>