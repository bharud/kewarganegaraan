<?php
$id = $_GET['id'];
include "../db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>KTP</title>
</head>
<body>
<table align="center" width="100%">
	<tr>
		<td align="center"><img src="../assets/gbr/jbr.png" width="70"></td>
		<td align="center"><h3>PEMERINTAH KABUPATEN JEMBER<br>KECAMATAN MUMBULSARI</h3></td>
	</tr>
</table>
<br>
<br>
<div align="center">
	<p style="font-size: 14px">SURAT KETERANGAN<br>
	Nomor :</p>
</div>
<br>
<br>
<br>
<p align="left" style="font-size: 20px">Yang bertandatangan di bawah ini Kepala Desa Lengkong Kecamatan Mumbulsari menerangkan bahwa:</p>
<br>
<table align="left">
<?php
$ktp = "SELECT * FROM v_ktp WHERE Id_Penduduk = '$id'";
$qktp = mysql_query($ktp);
$rktp = mysql_fetch_array($qktp);

if ($rktp['Jenis_Kelamin']=="W") {
	$kelamin = "Wanita";
}else{
	$kelamin = "Pria";
}
?>
	<tr>
		<td>Nama</td>
		<td> : </td>
		<td><?=$rktp['Nama'];?></td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td> : </td>
		<td><?=$rktp['Tempat_Lahir'].", ".$rktp['Tanggal_Lahir'];?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td> : </td>
		<td><?=$kelamin;?></td>
	</tr>
	<tr>
		<td>Kewarganegaraan</td>
		<td> : </td>
		<td>Indonesia</td>
	</tr>
	<tr>
		<td>Agama</td>
		<td> : </td>
		<td><?=$rktp['Agama'];?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td> : </td>
		<td><?=$rktp['Pekerjaan'];?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td> : </td>
		<td><?=$rktp['Alamat'];?></td>
	</tr>
</table>

<br>
<div align="left">
<p align="left" style="font-size: 20px">Benar yang namanya di atas adalah penduduk asli desa lengkong kecamatan mumbulsari bertempat tinggal di dusun barat, Demikian surat keterangan ini kami buat dengan sebenar-benarnya sebagai pengganti Kartu Keluarga (KK) berhubungan KK Yang bersangkutan masih atau sedang dalam proses pembuatan</p>
</div>
</body>
</html>