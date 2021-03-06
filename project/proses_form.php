<?php

$link = mysqli_connect("localhost", "root", "", "pendaftaran");

// if (!$link) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
// }
//
// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

///mengambil data dari form
$nama=$_POST["nama"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$alamat_tinggal=$_POST["alamat_tinggal"];
$alamat_ktp=$_POST["alamat_ktp"];
$prov=$_POST["prov"];
$kab=$_POST["kab"];
$kec=$_POST["kec"];
$nope=$_POST["nope"];
$email=$_POST["email"];
$goldar=$_POST["goldar"];
$alumni_tk=$_POST["alumni1"];
$alumni_sd=@$_POST["alumni2"];
$alumni_smp=@$_POST["alumni3"];
$alumni_sma=@$_POST["alumni4"];
// $goldar=$_POST["goldar"];
// $alumni=$_POST["alumni"];

// echo $nama;
// echo $jenis_kelamin;
// echo $alamat_tinggal;
// echo $alamat_ktp;
// echo $prov;
// echo $kab;
// echo $kec;
// echo $nope;
// echo $email;
// echo $goldar;
// echo $alumni;

///input ke tabel pengunjung
$sql = "INSERT INTO pendaftaran_alumni (nama, jenis_kelamin, alamat_tinggal, alamat_ktp, provinsi, kabupaten, kecamatan, nomor_hp, email, golongan_darah, alumni_tk, alumni_sd, alumni_smp, alumni_sma)
 VALUES ('$nama', '$jenis_kelamin', '$alamat_tinggal', '$alamat_ktp', '$prov', '$kab', '$kec', '$nope', '$email', '$goldar', '$alumni_tk', '$alumni_sd', '$alumni_smp', '$alumni_sma')";
///cek sudah terinput atau belum
// var_dump($sql); exit();
$input=mysqli_query($link,$sql);


// ?>
<!-- <a href="pendaftaran.php">OK</a> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pendaftaran - KAMAS SOLO</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">
  <link href="img/logo.png" rel="shortcut icon" type="image/png">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <img class="img-fluid rounded" src="img/logomedium.png" alt="">
      <a class="navbar-brand" href="index.html">&nbsp; KAMAS - Keluarga Alumni Madrasah Al Islam Surakarta</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dompetpeduli.html">Dompet Peduli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="pendaftaran.html">Pendaftaran</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Informsi Kontak</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Haidar Hendri</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on February 01, 2018 at 12:00 PM</p>

        <!-- Preview Image -->
        <hr>

        <!-- Post Content -->
        <img class="img-fluid rounded" src="img/bg.png" alt="">

        <br>
        <br>
		<?php 
		if($input){
			
		?>
		
        <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data anda berhasil tersimpan !</div>
		<?php }
		?>
        <p class="lead">Pendaftaran anggota KAMAS Regional Soloraya</p>

        <!-- Form Name -->
        <legend>Form Pendaftaran</legend>
        <form method="post" action="proses_form.php">

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="nama">Nama</label>
          <div class="col-md-12">
            <input id="nama" name="nama" type="text" placeholder="Masukkan Nama" class="form-control input-md">
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-12 control-label" for="jenis_kelamin">Jenis Kelamin</label>
          <div class="col-md-4">
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                  <option value="1">Pria</option>
                  <option value="2">Wanita</option>
                </select>
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-12 control-label" for="alamat_tinggal">Alamat tinggal</label>
          <div class="col-md-12">
            <textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal"></textarea>
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-12 control-label" for="alamat_ktp">Alamat KTP</label>
          <div class="col-md-12">
            <textarea class="form-control" id="alamat_ktp" name="alamat_ktp"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label" for="prov">Provinsi</label>
          <div class="col-md-12">
            <input id="prov" name="prov" type="text" placeholder="Masukkan provinsi" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label" for="kab">Kabupaten/Kota</label>
          <div class="col-md-12">
            <input id="kab" name="kab" type="text" placeholder="Masukkan Kabupaten/Kota" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label" for="kec">Kecamatan</label>
          <div class="col-md-12">
            <input id="kec" name="kec" type="text" placeholder="Masukkan Kecamatan" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label" for="nope">Nomor HP</label>
          <div class="col-md-12">
            <input id="nope" name="nope" type="text" placeholder="Masukkan Nomor HP" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label" for="email">Email</label>
          <div class="col-md-12">
            <input id="email" name="email" type="email" placeholder="email@example.com" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label" for="goldar">Golongan Darah</label>
          <div class="col-md-12">
            <div class="radio">
              <label><input type="radio" name="goldar" id="a" value="A">&nbsp;A</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="goldar" id="b" value="B">&nbsp;B</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="goldar" id="ab" value="AB">&nbsp;AB</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="goldar" id="o" value="O">&nbsp;O</label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label" for="alumni">Alumni Madrasah</label>
          <div class="col-md-12">
            <div class="checkbox">
              <label><input type="checkbox" name="alumni1" value="1">&nbsp; TK/RA</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="alumni2" value="1">&nbsp; SD/MI</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="alumni3" value="1">&nbsp; SMP/MTs</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="alumni4" value="1">&nbsp; SMA/MA</label>
            </div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <div class="col-md-4">
            <button type="submit" id="kirim" name="kirim" class="btn btn-success">KIRIM</button>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        </form>


        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Login</h5>
          <div class="card-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-5 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label><input type="checkbox"> Remember me </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Sign in</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">KALENDER</h5>
          <div class="card-body">
            <div class="calendar calendar-first" id="calendar_first">
              <div class="calendar_header">
                <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                <h2></h2>
                <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
              </div>
              <div class="calendar_weekdays"></div>
              <div class="calendar_content"></div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Haidar Hendri Setyawan 2018</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/calendar.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
