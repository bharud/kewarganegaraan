<?php

if(isset($_POST[cari])){
      $_SESSION[carinama]=$_POST[carinama];
}
?>
<!--Tombol tambah-->
<br>
<table width="100%">
  <tr>
    <td><button class="btn btn-white btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> Tambah karyawan</button></td>
    <td align="right"><form action="" method="POST">
  <div type="text" style="width: 300px;" class="input-group input-group-sm">
    <input class="form-control" placeholder="Cari Nama" name="carinama" value="<?=$_SESSION[carinama]?>">
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
  $qq="select * from karyawan where Nama like '%$_SESSION[carinama]%' limit $mula,10";

  $s=mysql_query($qq);
  $n=$mula+1;

  $qh="select * from karyawan where Nama like '%$_SESSION[carinama]%'";

  $per_hal=10;
  $jum=mysql_num_rows(mysql_query($qh));


  $halaman=ceil($jum / $per_hal);
  $page = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
  $start = ($page - 1) * $per_hal;

?>

<!--Tabel Data-->
<table width="95%" align="center" class="table table-hover table-bordered table-striped">
<thead>
<tr>
	<th class="text-center">NO</th>
	<th class="text-center">NIP</th>
	<th class="text-center">NAMA</th>
	<th class="text-center">JABATAN</th>
	<th class="text-center">ALAMAT</th>
	<th class="text-center">STATUS</th>
	<th class="text-center">TEMPAT & TANGGAL LAHIR</th>
  <th class="text-center">AKSI</th>
</tr>
</thead>
	<?php
	while ($row_user = mysql_fetch_array($s)) { ?>
  <tr>
	<td><?=$n;?></td>
	<td><?php echo $row_user['NIP']; ?></td>
	<td><?php echo $row_user['Nama']; ?></td>
	<td><?php echo $row_user['Jabatan']; ?></td>
	<td><?php echo $row_user['Alamat']; ?></td>
	<td><?php echo $row_user['Status_Kawin']; ?></td>
	<td><?php echo $row_user['Tempat_Lahir'].", ".$row_user['Tanggal_Lahir']; ?></td>
  <td><a href="?page=hapususer&id=<?=$row_user['Id_Karyawan'];?>" class="btn btn-white btn-bold btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
  <a href="?page=edituser&id=<?=$row_user['Id_Karyawan'];?>" class="btn btn-white btn-bold btn-warning btn-xs"><i class="fa fa-edit"></i> Ubah</a></td>
  </tr>
	<?php $n++; }; ?>
</table>

<ul class="pagination pull-right">
  <li><a href="?page=karyawan&hal=<?php echo $page -1 ?>"> < </a></li>
  <?php

for($x=1;$x<=$halaman;$x++){
  ?>
  <li  <?php if($page==$x){ echo " class='active' ";} ?>    ><a href="?page=karyawan&hal=<?php echo $x ?>"><?php echo $x ?></a></li>
  <?php
}
?>
  <li><a href="?page=karyawan&hal=<?php echo $page +1 ?>"> > </a></li>
</ul>


<!-- My Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center"><b>Formulir karyawan Baru</b></h4>
        </div>
        <div class="modal-body">
        <form method='POST' action=''>
  				<div class="form-group">
            <label>NIP </label>
          	<input name="nip" type="text" required class="form-control" placeholder="Masukkan NIP">
     			</div>
          <div class="form-group">
            <label>Jabatan </label>
            <input name="jabatan" type="text" required class="form-control" placeholder="Masukkan Jabatan">
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
            <label>Jenis Kelamin</label>
            <select name="jkel" class="form-control">
              <option value="">-- Pilih Jenis Kelamin --</option>
              <option value="P">Pria</option>
              <option value="W">Wanita</option>
            </select>
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
            <label>Nama </label>
            <input name="nama" type="text" required class="form-control" placeholder="Masukkan Nama Lengkap">
          </div>
          <div class="form-group">
            <label>Tempat Lahir </label>
            <input name="tempatlah" type="text" required class="form-control" placeholder="Masukkan Tempat Lahir">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir </label>
            <input type="date" name="tglhr" required class="form-control" required>
          </div>
          <div class="form-group">
            <label>Alamat </label>
            <textarea class="form-control" required name="alamat" rows="2"></textarea>
          </div>
          <div class="form-group">
            <label>Mulai kerja</label>
            <input type="date" name="tglkrj" required="" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Pendidikan</label>
            <select name="pendidikan" class="form-control">
              <option value="">-- Pilih Pendidikan --</option>
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
            <label>No. Telepon </label>
            <div class="input-group">
              <span class="input-group-addon">
                +62
              </span>
              <input name="nohp" class="form-control input-mask-phone" type="text"/>
            </div>
          </div>
          <div class="form-group">
            <label>Nomor Rekening </label>
            <input name="norek" type="text" required class="form-control" placeholder="Masukkan Nomor Rekening">
          </div>
          <div class="form-group">
            <label>Nama Bank </label>
            <input name="nmbnk" type="text" required class="form-control" placeholder="Masukkan Nama Bank">
          </div>
          <div class="form-group">
            <label>Username </label>
            <input name="user" type="text" required class="form-control" placeholder="Masukkan Username">
          </div>
          <div class="form-group">
            <label>Password </label>
            <input name="pass" type="password" required class="form-control" placeholder="Masukkan Password">
          </div>
    				<button name ="simpanuser" type="submit" value="simpan" class="btn btn-bold btn-white btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button name ="resetuser" type="reset" class="btn btn-white btn-bold btn-default"><i class="fa fa-refresh"></i> Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['simpanuser'])) {

    $su = mysql_query("INSERT INTO karyawan (Id_Karyawan, NIP, Jabatan, Status_Kawin, Jenis_Kelamin, Agama, Nama, Tempat_Lahir, Tanggal_Lahir, Alamat, Mulai_Kerja, Pendidikan, No_Hp, No_Rekening, Bank, Username, Password) VALUES (NULL,'$_POST[nip]','$_POST[jabatan]','$_POST[status]','$_POST[jkel]','$_POST[agama]','$_POST[nama]','$_POST[tempatlah]','$_POST[tglhr]','$_POST[alamat]','$_POST[tglkrj]','$_POST[pendidikan]','$_POST[nohp]','$_POST[norek]','$_POST[nmbnk]','$_POST[user]','$_POST[pass]')");
    if ($su) {
      echo "<script>
        alert(\"Berhasil Tambah User\")
        document.location=\"?page=karyawan\"
        </script>";
    }else{
      echo "<script>
        alert(\"Gagal Tambah User\")
        document.location=\"?page=karyawan\"
        </script>";
    }
  }
  ?>
