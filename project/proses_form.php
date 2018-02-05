<html><head><title>proses data dari form</title></head>
<body>
<h1>proses simpan buku tamu</h1>
<?
///membuat koneksi ke database
$server="localhost"; ///nama server
$username="root"; ///nama username mysql
$password=""; ///password, kosongkan jika tidak ada
$database="pendaftaran"; ///nama database yang dipilih

mysqli_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysqli_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$nama=$_POST[nama];
$jenis_kelamin=$_POST[jenis_kelamin];
$alamat_tinggal=$_POST[alamat_tinggal];
$alamat_ktp=$_POST[alamat_ktp];
$prov=$_POST[prov];
$kab=$_POST[kab];
$kec=$_POST[kec];
$nope=$_POST[nope];
$email=$_POST[email];
$goldar=$_POST[goldar];
$alumni=$_POST[alumni];


///input ke tabel pengunjung
$input=mysqli_query("INSERT INTO pendaftaran_alumni (nama, jenis_kelamin, alamat_tinggal, alamat_ktp, provinsi, kabupaten, kecamatan, nomor_hp, email, golongan_darah, alumni_madrasah)
 VALUES ('$nama', '$jenis_kelamin','$alamat_tinggal','$alamat_ktp','$prov','$kab','$kec','$nope','$email','$goldar','$alumni')");
///cek sudah terinput atau belum
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
