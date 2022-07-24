<?php
include "koneksi.php";

$nama=$_POST["nama"];
$noid=$_POST["noid"];
$nohp=$_POST["nohp"];
$tmpwisata=$_POST["tmpwisata"];
$tgl=$_POST["tgl"];
$pdewasa=$_POST["pdewasa"];
$panak=$_POST["panak"];
$total= ($pdewasa*10000)+$panak*10000*0.5;

//Query input menginput data kedalam tabel pesan
  $sql="insert into beli (nama,noid,nohp,tmpwisata,tgl,pdewasa,panak,total) values
		('$nama','$noid','$nohp','$tmpwisata','$tgl','$pdewasa','$panak','$total')";
		

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo header('Location: tiket.php');
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  
?>