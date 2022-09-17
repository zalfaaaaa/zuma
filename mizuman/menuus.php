<?php

$db = mysqli_connect("localhost","root","","mizuri");

$result = mysqli_query($db, "SELECT * FROM mr_menu");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #menu{
            background-color: grey;
        }
    </style>
    <title>MENU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <b><span class="fs-4 d-none d-sm-inline">Shin Mizu</span></b>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                        <li class="nav-item">
                            <a href="mizuu.php" class="nav-link align-middle px-0 text-light">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="menuus.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                <i class="fs-4 bi-speedometer2"></i> <span  class="ms-1 d-none d-sm-inline nav-link active" id="menu">Menu</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"></ul>
                        </li>
                        <li>
                            <a href="order.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-light">Orders</span></a>
                        </li>
                    </ul>
                    <hr>
                    <div>
                <a href="login.html" class="btn btn-outline-danger" type="submit">logout</a>
              </div>
                </div>
            </div>
            <div class="col py-3" style="background-color:#DDDDDD;">
        <div class="cointainer-sm">
    <div class="d-grid gap-2 col mx-auto">
    <h1 style="text-align:center;" >Shin Mizu Menu</h1>
    <table class="table table-dark table table-border container text-center">
    <thead>
    <tr>
        <th>No</th>
        <th>Id</th>
        <th>Nama</th>
        <th>Photo</th>
        <th>Harga</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php $i=1;?>
            <?php while($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row["id"];?></td>
            <td><?= $row["nama"];?></td>
            <td><img src="img/<?php echo $row["photo"];?>" width="50"></td>
            <td><?= $row["harga"];?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>    
</body>
</html>