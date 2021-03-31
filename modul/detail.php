<table class="table table-hover table-striped">
<?php
$id = $_GET['id'];
$pen = "SELECT * FROM penduduk WHERE Id_Penduduk = '$id'";
$qpen = mysql_query($pen);
$rpen = mysql_fetch_array($qpen);
?>
	<tr>
		<td width="30%"><b>Nama</b></td>
		<td width="70%"><?=$rpen['Nama'];?></td>
	</tr>
	<tr>
		<td><b>Alamat</b></td>
		<td><?=$rpen['Alamat'];?></td>
	</tr>
	<tr>
		<td><b>Agama</b></td>
		<td><?=$rpen['Agama'];?></td>
	</tr>
	<tr>
		<td><b>Jenis kelamin</b></td>
		<td><?=$rpen['Jenis_Kelamin'];?></td>
	</tr>
	<tr>
		<td><b>Status Kawin</b></td>
		<td><?=$rpen['Satatus_Kawin'];?></td>
	</tr>
	<tr>
		<td><b>Kecamatan</b></td>
		<td><?=$rpen['Kecamatan'];?></td>
	</tr>
	<tr>
		<td><b>Desa</b></td>
		<td><?=$rpen['Desa'];?></td>
	</tr>
	<tr>
		<td><b>Dusun</b></td>
		<td><?=$rpen['Dusun'];?></td>
	</tr>
	<tr>
		<td><b>Pendidikan</b></td>
		<td><?=$rpen['Pendidikan'];?></td>
	</tr>
	<tr>
		<td><b>Pekerjaan</b></td>
		<td><?=$rpen['Pekerjaan'];?></td>
	</tr>
	<tr>
		<td><b>No. Telepon</b></td>
		<td><?=$rpen['No_Hp'];?></td>
	</tr>
	<tr>
		<td><b>Anak Ke-</b></td>
		<td><?=$rpen['Anak_Ke'];?></td>
	</tr>
	<tr>
		<td><b>Nama Ayah</b></td>
		<td><?=$rpen['Nama_Ayah'];?></td>
	</tr>
	<tr>
		<td><b>Nama Ibu</b></td>
		<td><?=$rpen['Nama_Ibu'];?></td>
	</tr>
	<tr>
		<td><b>Tempat, Tanggal Lahir</b></td>
		<td><?=$rpen['Tempat_Lahir'].", ".$rpen['Tanggal_Lahir'];?></td>
	</tr>
</table>