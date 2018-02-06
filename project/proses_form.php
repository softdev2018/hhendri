<html><head><title>proses data dari form</title></head>
<body>
<h1>proses simpan buku tamu</h1>
<?php

$link = mysqli_connect("localhost", "root", "", "pendaftaran");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

///mengambil data dari form
$nama=$_POST["nama"];
$jenis_kelamin=$_POST["jenis_kelamin"];
// $alamat_tinggal=$_POST["alamat_tinggal"];
// $alamat_ktp=$_POST["alamat_ktp"];
$prov=$_POST["prov"];
$kab=$_POST["kab"];
$kec=$_POST["kec"];
$nope=$_POST["nope"];
$email=$_POST["email"];
// $goldar=$_POST["goldar"];
// $alumni=$_POST["alumni"];


///input ke tabel pengunjung
$sql = 'INSERT INTO pendaftaran_alumni (nama, jenis_kelamin, provinsi, kabupaten, kecamatan, nomor_hp, email)
 VALUES ($nama, $jenis_kelamin, $prov, $kab, $kec, $nope, $email)' ;
///cek sudah terinput atau belum

$input=mysqli_query($link,$sql);

if($input) ///jika sukses
{
echo "Buku tamu berhasil disimpan";
}
else ///jika gagal
{
echo "Buku tamu gagal disimpan";
}
?>
| <a href="pendaftaran.html">OK</a>
</body></html>
