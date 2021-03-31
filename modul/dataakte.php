<?php
if(isset($_POST[cari])){
      $_SESSION[cariakte]=$_POST[cariakte];
}

switch ($_GET['act']) {
  case "upd":
    mysql_query("UPDATE akte_lahir SET Status = '$_POST[status]', Tgl_Update = CURDATE() WHERE Id_Penduduk = '$_POST[id]'");
    break;
}
?>

<br>
<table width="100%">
  <tr>
    <td><button class="btn btn-white btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data Pembuatan AKTE</button></td>
    <td align="right"><form action="" method="POST">
  <div type="text" style="width: 300px;" class="input-group input-group-sm">
    <input class="form-control" placeholder="Cari Nama" name="cariakte" value="<?=$_SESSION[cariakte]?>">
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
  $qq="select * from v_akte where Nama like '%$_SESSION[cariakte]%' limit $mula,10";

  $s=mysql_query($qq);
  $n=$mula+1;

  $qh="select * from v_akte where Nama like '%$_SESSION[cariakte]%'";

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
  <th class="text-center" width="15%">Tanggal Pembuatan</th>
  <th class="text-center" width="12%">TELEPON</th>
  <th class="text-center" width="18%">STATUS</th>
  <th class="text-center" width="20%">AKSI</th>
</tr>
</thead>
  <?php
  while ($row_user = mysql_fetch_array($s)) { ?>
    <?php
    if ($row_user['Status']=="Syarat belum lengkap") {
      $stat = "danger";
    }elseif ($row_user['Status']=="Proses") {
      $stat = "warning";
    }elseif ($row_user['Status']=="Selesai") {
      $stat = "success";
    }else {
      $stat = "info";
    }
    ?>
  <tr class="<?=$stat?>">
   <td><?=$n;?></td>
   <td><?=$row_user['Nama'];?></td>
   <td><?=$row_user['Tgl_Buat'];?></td>
   <td><?="0".$row_user['No_Hp'];?></td>
   <td>
     <form action="?page=dataakte&act=upd" method="post">
       <select class="form-control" name="status" onchange="this.form.submit()">
         <option value="Syarat belum lengkap" <?php if ($row_user['Status']=="Syarat belum lengkap") {echo "selected";} ?>>Syarat belum lengkap</option>
         <option value="Proses" <?php if ($row_user['Status']=="Proses") {echo "selected";} ?>>Proses</option>
         <option value="Selesai" <?php if ($row_user['Status']=="Selesai") {echo "selected";} ?>>Selesai</option>
         <option value="Sudah diserahkan" <?php if ($row_user['Status']=="Sudah diserahkan") {echo "selected";} ?>>Sudah diserahkan</option>
       </select>
       <input type="hidden" name="id" value="<?=$row_user['Id_Penduduk'];?>">
     </form>
   </td>
   <td width="14%"><a href="?page=detail&id=<?=$row_user['Id_Penduduk'];?>" class="btn btn-white btn-bold btn-info btn-xs"><i class="fa fa-info-circle"></i> Detail</a><a href="modul/cetakaktepdf.php?id=<?=$row_user['Id_Penduduk'];?>" target="_new" class="btn btn-white btn-bold btn-warning btn-xs"><i class="fa fa-print"></i> Cetak</a><a href="?page=smsakte&id=<?=$row_user['Id_Penduduk'];?>" class="btn btn-white btn-bold btn-danger btn-xs"><i class="fa fa-send"></i> SMS</a></td>
  </tr>
  <?php $n++; }; ?>
</table>
<span class="label label-danger">Syarat belum lengkap</span>
<span class="label label-warning">Proses</span>
<span class="label label-success">Selesai</span>
<span class="label label-info">Sudah diserahkan</span>

<ul class="pagination pull-right">
  <li><a href="?page=dataakte&hal=<?php echo $page -1 ?>"> < </a></li>
  <?php

for($x=1;$x<=$halaman;$x++){
  ?>
  <li  <?php if($page==$x){ echo " class='active' ";} ?>    ><a href="?page=dataakte&hal=<?php echo $x ?>"><?php echo $x ?></a></li>
  <?php
}
?>
  <li><a href="?page=dataakte&hal=<?php echo $page +1 ?>"> > </a></li>
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
            <div class="checkbox">
                <label>
                  <input type="hidden" name="dokter" value="N">
                  <input name="dokter" value="Y" type="checkbox" class="ace" />
                  <span class="lbl"> Surat keterangan dokter</span>
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="hidden" name="kk" value="N">
                  <input name="kk" value="Y" type="checkbox" class="ace" />
                  <span class="lbl"> Foto copy Kartu Keluarga</span>
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="hidden" name="ktp" value="N">
                  <input name="ktp" value="Y" type="checkbox" class="ace" />
                  <span class="lbl"> Foto copy KTP</span>
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="hidden" name="nikah" value="N">
                  <input name="nikah" value="Y" type="checkbox" class="ace" />
                  <span class="lbl"> Foto copy buku nikah</span>
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="hidden" name="saksi" value="N">
                  <input name="saksi" value="Y" type="checkbox" class="ace" />
                  <span class="lbl"> Foto copy KTP saksi</span>
                </label>
              </div>
              <div class="form-group">
              <label>Tanggal Pembuatan</label>
              <input name="tgl" type="date" required class="form-control">
            </div>
            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control">
                <option value="">-- Pilih Status --</option>
                <option value="Syarat belum lengkap">Syarat belum lengkap</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
                <option value="Sudah diserahkan">Sudah diserahkan</option>
              </select>
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
    $b = mysql_query("SELECT Id_Penduduk FROM penduduk WHERE Nama LIKE '%$_POST[nama]%'");
    $c = mysql_fetch_array($b);

    if (mysql_num_rows($b) > 0) {

      $su = mysql_query("INSERT INTO akte_lahir(Id_Akte, Id_Penduduk, Ya_Ket_Dokter, Ya_Kk, Ya_Ktp, Ya_Buku_Nikah, Ya_Ktp_Saksi, Tgl_Buat, Status) VALUES (NULL,'$c[Id_Penduduk]','$_POST[dokter]','$_POST[kk]','$_POST[ktp]','$_POST[nikah]','$_POST[saksi]','$_POST[tgl]','$_POST[status]')");
      if ($su) {
        echo "<script>
          alert(\"Berhasil Tambah Data\")
          document.location=\"?page=dataakte\"
          </script>";
      }else{
        echo "<script>
          alert(\"Gagal Tambah Data\")
          document.location=\"?page=dataakte\"
          </script>";
      }
      }else{
        echo "<script>
          alert(\"Penduduk Belum terdaftar\")
          document.location=\"?page=dataakte\"
          </script>";
    }
  }
  ?>
