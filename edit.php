<?php include"config.php"; ?>
<?php
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user WHERE id='$_GET[id]'));
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
                <span class="mt-3 mb-3 text-danger" style="font-size:20px;font-weight: bold;">Form Update</span>
                
                <div class="col-12 col-md-6 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?=$data['nama']?>" placeholder="Ucok" required>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" <?=$data['alamat']?> placeholder="Jakarta, Indonesia" required>
                </div>
                <div class="text-end">
                    <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
                    
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>

</html>