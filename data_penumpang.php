<?php

include 'crud/connection.php';
include 'crud/function.php';

if (isset($_GET['delete']))
{
  deletePenumpang($_GET);
  header('Location: data_penumpang.php');
}

$penampung=[];
if (isset($_POST['cari']))
{
  $penampung=searching($_POST['search']);
  if (!empty($penampung)) {
    $data_daftar=$penampung;
  } elseif (empty($penampung)) {
    $error = "Maaf, ".$_POST['search']." Tidak ditemukan!!!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="shortcut icon" href="asset/img/bus.png" type="image/x-icon" class="rounded-circle">
    <title>Data Penumpang | BusKita</title>
</head>
<body>

  <!-- Navbar -->

  <div id="page_header">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand" href="index.php">
                      <img src="asset/img/logo1.png" style="height: 70px; width:200px">
                    </a>
                    <ul class="navbar-nav mr-auto" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;">
                      <li class="nav-item active">
                        <a class="nav-link text-light mt-2 mb-3 ml-3" href="index.php">HOME <span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link text-light mt-2 mb-3 ml-3" href="data_penumpang.php">DAFTAR PENUMPANG BUS <span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link text-light mt-2 mb-3 ml-3" href="beli.php">BELI TIKET <span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link text-light mt-2 mb-3 ml-3" href="about.html">TENTANG <span class="sr-only"></span></a>
                      </li>
                  </div>
                </nav>
              </div>
            </div>
      </div>


    <!-- search bar -->

<div class="container">
    <div class="row">
        <div class="col">
          <form class="form-inline" action="data_penumpang.php" method="POST">
            <div class="form-group mx-sm-3 mb-2 mt-3" style="padding-left: 850px;">
              <input type="text" class="form-control mr-2" name="search" placeholder="Cari...">
              <button type="submit" class="btn btn-outline-primary" name="cari"><i class="fas fa-search"></i></button>
            </div>
          </form>
        </div>
    </div>
</div>

    <!-- Alert Message -->

<div class="col-5 mx-auto mt-3">
  <?php if (isset($error)) : ?>
      <div role="alert" class="alert alert-danger">
        <?php echo $error; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <?php endif; ?>
</div>

    <!-- Form Tabel -->

<div class="container mt-1">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered table-dark text-center">
      <thead class="thead-light">
        <tr>
          <th scope="col">PENUMPANG</th>
          <th scope="col">TIKET KELAS</th>
          <th scope="col">TUJUAN</th>
          <th scope="col">HARGA TIKET</th>
          <th scope="col">KEBERANGKATAN</th>
          <th scope="col">AKSI</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($data_daftar as $key): ?>
        <tr>
          <td class="border rounded border border-secondary"><?php echo $key['nama_penumpang'];?></td>
          <td class="border rounded border border-secondary"><?php echo $key['tiket_kelas'];?></td>
          <td class="border rounded border border-secondary"><?php echo $key['tujuan'];?></td>
          <td class="border rounded border border-secondary"><?php echo "Rp.". number_format($key['harga_tiket']);?></td>
          <td class="border rounded border border-secondary"><?php echo $key['tanggal'];?></td> 
          <td class="border rounded border border-secondary"><a class="btn btn-outline-danger" href="data_penumpang.php?delete=&id_penumpang=<?php echo $key['id_penumpang']; ?> "onclick="return confirm('Apakah Anda yakin ingin menghapus data ini???')"><i class="fas fa-user-minus"></i></a>  <a class="btn btn-outline-success" href="edit.php?id_penumpang=<?php echo $key['id_penumpang']; ?>"><i class="fas fa-user-edit"></i></a></td>
        </tr>
          <?php endforeach; ?>
      </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script>
    if ($(window).width() > 992) {
      $(window).scroll(function(){  
        if ($(this).scrollTop() > 40) {
            $('#page_header').addClass("fixed-top");
            $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
          }else{
            $('#page_header').removeClass("fixed-top");
            $('body').css('padding-top', '0');
          }   
      });
    }
  </script>
</body>
</html>