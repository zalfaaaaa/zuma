<?php
  function hasil(){
    $tanggal= $_POST['tanggal'];
    $namcus = $_POST['namcus'];
    $noId = $_POST['noId'];
    $durasi = $_POST['durasi'];
    $tipe = $_POST['tipe'];
    $deluxe = 850000;
    $superior = 500000;
    $diskon = 20000 ;
    $total = 100000;
    error_reporting(0);
   
        //Output program dan Pemanggilan Array
        foreach($namcus as $key => $val){
        ?>
          <table border="0" width="500" cellpadding="1" cellspacing="1" >
      
      <tr>
        <td><?php echo '&nbsp Tanggal Booking';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$tanggal;?></td>
      </tr>
    
      <tr>
        <td><?php echo '&nbsp Nama Customer';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$namcus[$key];?></td>
      </tr>
    
      <tr>
        <td><?php echo '&nbsp No Identitas';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$noId[$key];?></td>
      </tr>

      <tr>
        <td><?php echo '&nbsp Tipe Kamar';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$tipe;?></td>
      </tr>
    
      <tr>
        <td><?php echo '&nbsp Durasi Penginapan';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$durasi.' Malam';?></td>
      </tr>

      <tr>
        <td><?php echo '&nbsp Diskon';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td>
          <?php
          //Menentukan Diskon 
          if($tipe){
            if($durasi == ""){
                echo "Durasi belum diisi";
            }elseif($tipe == "Deluxe"){
              $hasil = $deluxe * $durasi ;
              $hasil;
            }elseif($tipe == "Superior"){
              $hasil = $superior * $durasi;
              $hasil;
            }

            if($hasil > 2000000){
              $diskon = (20/100)*$hasil;
              $total = $hasil - $diskon;
              echo "&nbspPotongan diskon 20%";
            }elseif($hasil > 1500000){
              $diskon = (10/100)*$hasil;
              $total = $hasil - $diskon;
              echo "&nbspPotongan diskon 10%";
            }else{
              echo "&nbspAnda tidak berhak mendapatkan diskon";
              }
          }?>
        </td>
      </tr>

      <tr>
        <td><?php echo '&nbsp Total Bayar';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td>
          <?php 
          //Menentukan Total Biaya
          if($tipe){
            if($durasi == ""){
                echo "Durasi belum diisi";
            }elseif($tipe == "1"){
              $hasil = $deluxe * $durasi ;
              $hasil;
            }elseif($tipe == "2"){
              $hasil = $superior * $durasi;
              $hasil;
            }

            if($hasil > 2000000){
              $diskon = (20/100)*$hasil;
              $total = $hasil - $diskon;
              echo "&nbsp".$total;
            }elseif($hasil > 1500000){
              $diskon = (10/100)*$hasil;
              $total = $hasil - $diskon;
              echo "&nbsp".$total;
            }else{
              echo "&nbsp".$hasil;
            }
          }?>
        </td>            
      </tr>
    </table>
      <?php 
    }
  }?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    <style>
        #order{
            background-color: grey;
        }
    </style>
    <title>PEMESANAN</title>
</head>
<body>
<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <b><span class="fs-4 d-none d-sm-inline">Shin Mizu</span></b>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="mizuu.php" class="nav-link align-middle px-0 text-light">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="menuus.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Menu</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"></ul>
                        </li>
                        <li>
                            <a href="order.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-light nav-link active" id="order">Orders</span></a>
                        </li>
                        </ul>
                    <hr>
                    <div class="d-grid gap-2 col-3">
                <a href="login.html" class="btn btn-outline-danger my-3" type="submit" style="text-align:right ;">logout</a>
              </div>
                    
                </div>
    </div>
    <form method="POST" name="frmpost" action="">
 <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <th><h2> Form Pemesanan </h2></th>
  </tr>
  <tr>
    <td>
      <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">

        <tr height="40"> 
            <td width="200" valign="center">Tanggal Booking</td>
            <td width="10" valign="center"> : </td>
            <td><input type="date" name="tanggal"></td>
        </tr>

        <tr height="30">
          <td width="200" valign="center">Nama Customer</td>
          <td width="10" valign="center"> : </td>
          <td><input name="namcus[]" type="text" size="20" /></td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">No Identitas</td>
          <td width="10" valign="center"> : </td>
          <td><input name="noId[]" type="text" size="40" /></td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">Tipe Kamar</td>
          <td width="10" valign="center"> : </td>
          <td>
            <select name="tipe">
              <option name="-" value="-" hidden>-</option>
              <option name="deluxe" value="Deluxe">Deluxe</option>
              <option name="superior" value="Superior">Superior</option>
            </select>
          </td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">Durasi Menginap</td>
          <td width="10" valign="center"> : </td>
          <td><input  name="durasi" type="text" size="10"  /> Malam</td>
        </tr>

        <tr>
          <td align="right" colspan="2"><input type="submit" name="btnOk" value="Simpan" /></td>
          <td><input type="reset" name="btnCancel" value="Cancel" /></td>
        </tr>

      </table>
      </table>
      <br>
      <br>
      
 <table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td>
            <?php
            //Pemanggilan Function
              hasil();
            ?>
          </td>
        </tr>
 </table>

</form>
</body>
</html>