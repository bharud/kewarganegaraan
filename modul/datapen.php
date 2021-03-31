<?php

if(isset($_POST[cari])){
      $_SESSION[caripen]=$_POST[caripen];
}
?>
<!--Tombol tambah-->

<br>
<table width="100%">
  <tr>
    <td><button class="btn btn-white btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data Penduduk</button></td>
    <td align="right"><form action="" method="POST">
  <div type="text" style="width: 300px;" class="input-group input-group-sm">
    <input class="form-control" placeholder="Cari Nama" name="caripen" value="<?=$_SESSION[caripen]?>">
      <span class="input-group-btn">
        <input type="submit" name="cari" class="btn btn-info btn-flat btn-white btn-bold" value="Cari!">
      </span>
  </div>
</form></td>
  </tr>
</table>
<br>

<?php
  $hal=(!isset($_GET[hal]))? $hal=1: $hal=$_GET[hal];

  $mula=($hal  * 10) - 10 ;
  $qq="select * from penduduk where Nama like '%$_SESSION[caripen]%' limit $mula,10";

  $s=mysql_query($qq);
  $n=$mula+1;

  $qh="select * from penduduk where Nama like '%$_SESSION[caripen]%'";

  $per_hal=10;
  $jum=mysql_num_rows(mysql_query($qh));


  $halaman=ceil($jum / $per_hal);
  $page = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
  $start = ($page - 1) * $per_hal;

?>

<!--Tabel Data-->
<table width="80%" align="center" class="table table-hover table-bordered table-striped">
<thead>
<tr>
	<th class="text-center" width="2%">NO</th>
	<th class="text-center" width="33%">NAMA</th>
	<th class="text-center" width="15%">TEMPAT & TANGGAL LAHIR</th>
	<th class="text-center" width="15%">STATUS</th>
	<th class="text-center" width="15%">TELEPON</th>
  <th class="text-center" width="20%">AKSI</th>
</tr>
</thead>
	<?php
	while ($row_user = mysql_fetch_array($s)) { ?>
  <tr>
	 <td><?=$n;?></td>
   <td><?=$row_user['Nama'];?></td>
   <td><?=$row_user['Tempat_Lahir'].", ".$row_user['Tanggal_Lahir'];?></td>
   <td><?=$row_user['Satatus_Kawin'];?></td>
   <td><?="0".$row_user['No_Hp'];?></td>
  <td width="14%"><a href="?page=detail&id=<?=$row_user['Id_Penduduk'];?>" class="btn btn-white btn-bold btn-info btn-xs"><i class="fa fa-info-circle"></i> Detail</a><a href="?page=editpen&id=<?=$row_user['Id_Penduduk'];?>" class="btn btn-white btn-bold btn-warning btn-xs"><i class="fa fa-edit"></i> Ubah</a><a href="?page=hapuspen&id=<?=$row_user['Id_Penduduk'];?>" class="btn btn-white btn-bold btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a></td>
  </tr>
	<?php $n++; }; ?>
</table>

<ul class="pagination pull-right">
  <li><a href="?page=datapen&hal=<?php echo $page -1 ?>"> < </a></li>
  <?php

for($x=1;$x<=$halaman;$x++){
  ?>
  <li  <?php if($page==$x){ echo " class='active' ";} ?>    ><a href="?page=datapen&hal=<?php echo $x ?>"><?php echo $x ?></a></li>
  <?php
}
?>
  <li><a href="?page=datapen&hal=<?php echo $page +1 ?>"> > </a></li>
</ul>


<!-- My Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center"><b>Formulir Data Baru</b></h4>
        </div>
        <div class="modal-body">
          <form method='POST' action=''>
          		<div class="form-group">
          			<label>Nama Lengkap </label>
        		    <input name="nama" type="text" required class="form-control" placeholder="Masukkan Nama Lengkap">
   			 	    </div>
              <div class="form-group">
                <label>Alamat </label>
                <textarea class="form-control" required name="alamat" rows="2"></textarea>
              </div>
				      <div class="form-group">
                <label>Agama</label>
                <select name="agama" class="form-control">
                  <option value="">-- Pilih Agama --</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jkel" class="form-control">
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  <option value="P">Pria</option>
                  <option value="W">Wanita</option>
                </select>
              </div>
              <div class="form-group">
                <label>Status Kawin </label>
                <select name="status" class="form-control">
                  <option value="">-- Pilih Satatus Perkawianan --</option>
                  <option value="Belum Menikah">Belum Menikah</option>
                  <option value="Menikah">Menikah</option>
                  <option value="Janda">Janda</option>
                  <option value="Duda">Duda</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kecamatan</label>
                <input name="kec" type="text" required class="form-control" placeholder="Masukkan Nama Kecamatan">
              </div>
              <div class="form-group">
                <label>Desa</label>
                <input name="desa" type="text" required class="form-control" placeholder="Masukkan Nama Desa">
              </div>
              <div class="form-group">
                <label>Dusun</label>
                <input name="dusun" type="text" required class="form-control" placeholder="Masukkan Nama Dusun">
              </div>
              <div class="form-group">
                <label>Pendidikan</label>
                <select name="pendidikan" class="form-control">
                  <option value="">-- Pilih Pendidikan --</option>
                  <option value="SD">SD</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA</option>
                  <option value="SMK">SMK</option>
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                </select>
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input name="kerja" type="text" class="form-control" placeholder="Masukkan Pekerjaan">
              </div>
              <div class="form-group">
                <label>No. Telepon</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    +62
                  </span>
                  <input name="nohp" class="form-control input-mask-phone" type="text"/>
                </div>
              </div>
              <div class="form-group">
                <label>Anak Ke-</label>
                <input name="anak" type="number" required class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Ayah</label>
                <input name="ayah" type="text" required class="form-control" placeholder="Masukkan Nama Ayah">
              </div>
              <div class="form-group">
                <label>Nama Ibu</label>
                <input name="ibu" type="text" required class="form-control" placeholder="Masukkan Nama Ibu">
              </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input name="tempatlah" type="text" required class="form-control" placeholder="Masukkan Tempat Lahir">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir </label>
                <input type="date" name="tglhr" required class="form-control" required>
              </div>
    				<button name="simpan" type="submit" value="simpan" class="btn btn-bold btn-white btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button name ="resetuser" type="reset" class="btn btn-white btn-bold btn-default"><i class="fa fa-refresh"></i> Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['simpanuser'])) {
    $su = mysql_query("INSERT INTO penduduk (Id_Penduduk, Nama, Alamat, Agama, Jenis_Kelamin, Satatus_Kawin, Kecamatan, Desa, Dusun, Pendidikan, Pekerjaan, No_Hp, Anak_Ke, Nama_Ayah, Nama_Ibu, Tempat_Lahir, Tanggal_Lahir) VALUES (NULL,'$_POST[nama]','$_POST[alamat]','$_POST[agama]','$_POST[jkel]','$_POST[status]','$_POST[kec]','$_POST[desa]','$_POST[dusun]','$_POST[pendidikan]','$_POST[kerja]','$_POST[nohp]','$_POST[anak]','$_POST[ayah]','$_POST[ibu]','$_POST[tempatlah]','$_POST[tglhr]')");
    if ($su) {
      echo "<script>
        alert(\"Berhasil Tambah Penduduk\")
        document.location=\"?page=datapen\"
        </script>";
    }else{
      echo "<script>
        alert(\"Gagal Tambah Penduduk\")
        document.location=\"?page=datapen\"
        </script>";
    }
  }
  ?>
