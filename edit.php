<?php

include "crud/connection.php";

$daftar=$db->query("select * from tiket where id_penumpang=".$_GET['id_penumpang']);
$data_daftar=$daftar->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="shortcut icon" href="asset/img/bus.png" type="image/x-icon" class="rounded-circle">
    <title>Form Edit daftar</title>
</head>
<body>

    <!-- Navbar -->

<div id="page-header">
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
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

    <!-- edit -->

<div class="container">
    <div class="row vh-100 justify-content-center mt-3">
        <div class="col-4 border rounded p-3 align-self-center" style="background-color: cyan;">

            <form action="crud/update.php" method="POST">
                <h3 class="text-center">Edit Data</h3>
                <input type="hidden" name="id_penumpang"  value="<?php echo $data_daftar[0]['id_penumpang']; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama_penumpang" value="<?php echo $data_daftar[0]['nama_penumpang']; ?>" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1 ">Tiket Kelas</label>
                <select name="tiket_kelas" value="<?php echo $data_daftar[0]['tiket_kelas']; ?>" class="form-control" autocomplete="off">
                <?php

                $data=['Ekonomi','Patas','VIP','Executive','Super Executive'];

                ?>
                <?php foreach($data as $key):?>
                    <?php if($key==$data_daftar[0]['tiket_kelas']):?>
                    <option selected><?php echo $key;?></option>
                    <?php else:?>
                        <option><?php echo $key;?></option>
                    <?php endif;?>
                <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label fqor="exampleInputPassword1">Tujuan</label>
                <input type="text" name="tujuan" value="<?php echo $data_daftar[0]['tujuan']; ?>" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1 ">Pilih Harga Tiket</label>
                <select name="harga_tiket" value="<?php echo number_format($data_daftar[0]['harga_tiket']); ?>" class="form-control" autocomplete="off">
                <?php

                $harga=[150000,300000,400000,450000,500000];

                ?>
                <?php foreach($harga as $key):?>
                    <?php if($key==$data_daftar[0]['harga_tiket']):?>
                    <option selected><?php echo $key;?></option>
                    <?php else:?>
                        <option><?php echo $key;?></option>
                    <?php endif;?>
                <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="datepicker">Tanggal Keberangkatan</label>
                <input type="text" id="date" name="tanggal" value="<?php echo $data_daftar[0]['tanggal']; ?>" class="form-control" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin untuk mengubah data ini???')">Simpan</button>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$( function() {
	  $( "#date" ).datepicker({
		 dateFormat:"dd-mm-yy",
	  });
	});
</script>
</body>
</html>'