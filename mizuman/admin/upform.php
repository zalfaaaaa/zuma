<?php

$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=mizuri", 'root', '');
$query = $db->query("select * from mr_menu where id=$id ");
$data = $query->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>update</title>
</head>
<body>
    <form method="POST" action="up.php" class="row g-3" style="padding-top: 20px; padding-left: 25px;">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="col-auto">
            <label class="form-label">nama</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" value="<?= $data['nama'] ?>">
        </div>
        <div class="col-auto">
            <label for="" class="form-label">photo</label>
            <input type="photo" name="photo" class="form-control" placeholder="photo" value="<?= $data['photo'] ?>">
        </div>
        <div class="col-auto">
            <label class="form-label">harga</label>
            <input type="text" name="harga" class="form-control" placeholder="harga" value="<?= $data['harga']?>">
        </div>
        <div class="d-grid gap-2 d-md-block mx-auto" style="padding-top:5px;">
            <button type="submit" value="simpan" class="btn btn-primary mb-3" style="--bs-btn-font-weight: 80;">.   .Update.   .</button>
            <button type="" class="btn btn-danger mb-3" style="--bs-btn-font-weight: 600;" action="menu.php" >.   .Batal.   .</button>
            </div>
    </form>

</body>
</html>