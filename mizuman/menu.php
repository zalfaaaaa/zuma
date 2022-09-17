<?php

session_start();

$db = mysqli_connect("localhost","root","","mizuri");

$result = mysqli_query($db, "SELECT * FROM mr_menu");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      #menu{
            background-color: grey;
        }
      *{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
    </style>
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
                            <a href="mizua.php" class="nav-link align-middle px-0 text-light">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" id="home">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="menu.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline nav-link active" id="menu">Menu</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"></ul>
                        </li>
                        <li>
                            <a href="person.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-light">Personal</span></a>
                        </li>
                        <li>
                            <a href="report.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-light">Report</span></a>
                        </li>
                    </ul>
                    <hr>
                    <div class="d-grid gap-2 col-3">
                <a href="login.html" class="btn btn-outline-danger my-3" type="submit" style="text-align:right ;">logout</a>
              </div>
              </div>
            </div>
<div class="container">
    <div class="row" >
      <div class="col-md-8 offset-md-1">
        <form class="card-body cardbody-color p-lg-4 " method="get">
          <div class="text-center">
    <h1>M E N U</h1>
    <table class="table table-dark table-borderless" cellpadding="10" cellspacing="0">
        <tr class="">
            <th>No</th>
            <th>Aksi</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Photo</th>
            <th>Harga</th>
            <!-- <th>Jurusan</th> -->
        </tr>
            <?php $i=1;?>
            
            <?php while($row = mysqli_fetch_assoc($result)):?>
            <tr>
            <td><?= $i ?></td>
            <td>
                <a href="admin/upform.php?id=<? $row['id'];?>" class="btn btn-secondary mb-3">Ubah</a>
                <a href="del.php?id=<?= $row["id"];?>" class="btn btn-danger mb-3">Hapus</a>
            </td>
            <td><?= $row["id"];?></td>
            <td><?= $row["nama"];?></td>
            <td><img src="img/<?php echo $row["photo"];?>" width="50"></td>
            <td><?= $row["harga"];?></td>
        </tr>
        <?php $i++; ?>
        
        <?php endwhile ?>
    </table>
    </div>   
        </form>
</div>
</div>    
</div>    
</div>
</body>
</html>