<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="shortcut icon" href="asset/img/bus.png" type="image/x-icon" class="rounded-circle">
    <title>Beli Tiket | BusKita</title>
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

    <!-- Form Beli -->
  <div class="container">
    <div class="row vh-100 justify-content-center mt-3">
        <div class="col-4 border rounded p-3 align-self-center" style="background-color: cyan;">
            <form action="crud/input.php" method="POST">
                <h3 class="text-center" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">BELI TIKET</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama_penumpang" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1 ">Tiket Kelas</label>
                    <select class="form-control" name="tiket_kelas" id="exampleFormControlSelect1" autocomplete="off" required>
                        <option> </option>
                        <option>Ekonomi</option>
                        <option>Patas</option>
                        <option>VIP</option>
                        <option>Executive</option>
                        <option>Super Executive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1 ">Pilih Harga Tiket</label>
                <select name="harga_tiket" class="form-control" id="exampleFormControlSelect1" autocomplete="off" required>
                    <option> </option>
                    <option>150000</option>
                    <option>300000</option>
                    <option>400000</option>
                    <option>450000</option>
                    <option>500000</option>
                </select>
            </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Keberangkatan</label>
                  <input type="text" id="date" name="tanggal" class="form-control" autocomplete="off" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="beli.php" style="color: white; text-decoration:none;">Batal</a></button>
                    <button type="submit" class="btn btn-primary"> Beli</button>
                </div>
            </form>
        </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
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
</html>