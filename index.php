<?php 
include"config.php"; 

echo $webs['var'];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <form action="tambah.php" method="post">
        <div class="row">
                <span class="mt-3 mb-3 text-danger" style="font-size:20px;font-weight: bold;">Data Karyawan Berca</span>
                <?php
                if(isset($_GET['info']) && $_GET['info']=='berhasil'){
                ?>
                <div class="alert alert-primary" role="alert">
                    Data berhasil di input.
                </div>
                <?php
                }else if(isset($_GET['info']) && $_GET['info']=='dihapus'){
                ?>                
                <div class="alert alert-primary" role="alert">
                    Data berhasil di hapus.
                </div>
                <?php
                }
                ?>
                
                <div class="col-12 col-md-6 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Ucok" required>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Jakarta, Indonesia" required>
                </div>
                <div class="text-end">
                    <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
                    
                </div>
            </div>
        </form>
    </div>

    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
                    while($tampil = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr class="">
                        <td scope="row"><?=$no;?></td>
                        <td><?=$tampil['nama'];?></td>
                        <td><?=$tampil['alamat'];?></td>
                        <td><a href="edit.php">Edit</a> | <a href="hapus.php?id=<?=$tampil['id']?>">Hapus</a></td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>

</html>