<?php
if(isset($_POST[cari])){
      $_SESSION[carilap]=$_POST[carilap];
}
?>
<br>
<table width="100%">
  <tr>
    <td><a href="modul/cetaklaporanpdf.php" target="_new" class="btn btn-white btn-bold btn-info"><i class="fa fa-file-pdf-o red"></i> Cetak Laporan</a></td>
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
  $qq="select * from penduduk where Nama like '%$_SESSION[carilap]%' limit $mula,10";

  $s=mysql_query($qq);
  $n=$mula+1;

  $qh="select * from penduduk where Nama like '%$_SESSION[carilap]%'";

  $per_hal=10;
  $jum=mysql_num_rows(mysql_query($qh));


  $halaman=ceil($jum / $per_hal);
  $page = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
  $start = ($page - 1) * $per_hal;
?>
<table width="80%" align="center" class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <td rowspan="2" align="center" width="2%">No.</td>
      <td rowspan="2" align="center" width="25%">Nama</td>
      <td rowspan="2" align="center" width="15%">No. Tlpn</td>
      <td colspan="3" align="center" width="25%">Pembuatan</td>
      <td rowspan="2" align="center" width="13%">Tanggal</td>
      <td rowspan="2" align="center" width="20%">Status</td>
    </tr>
    <tr>
      <td align="center">KTP</td>
      <td align="center">AKTE</td>
      <td align="center">KK</td>
    </tr>
  </thead>
  <tbody>
  <?php
  while ($r = mysql_fetch_array($s)) {
    $t_ktp = mysql_fetch_array(mysql_query("SELECT * FROM v_ktp WHERE Id_Penduduk = '$r[Id_Penduduk]' LIMIT 1"));
    $t_akte = mysql_fetch_array(mysql_query("SELECT * FROM v_akte WHERE Id_Penduduk = '$r[Id_Penduduk]' LIMIT 1"));
    $t_kk = mysql_fetch_array(mysql_query("SELECT * FROM v_kk WHERE Id_Penduduk = '$r[Id_Penduduk]' LIMIT 1"));

    $tg_ktp = (int) str_replace("-","",$t_ktp['Tgl_Update']);
    $tg_akte = (int) str_replace("-","",$t_akte['Tgl_Update']);
    $tg_kk = (int) str_replace("-","",$t_kk['Tgl_Update']);

    if (($tg_ktp >= $tg_akte)&&($tg_ktp >= $tg_kk)) {
      $tgl = $t_ktp['Tgl_Buat'];
      $st = $t_ktp['Status'];
    }else if (($tg_akte >= $tg_ktp)&&($tg_akte >= $tg_kk)) {
      $tgl = $t_akte['Tgl_Buat'];
      $st = $t_akte['Status'];
    }else if (($tg_kk >= $tg_ktp)&&($tg_kk >= $tg_akte)) {
      $tgl = $t_akte['Tgl_Buat'];
      $st = $t_akte['Status'];
    }else {
      $tgl = "-";
      $st = "-";
    }

    if ($st=="Syarat belum lengkap") {
      $stat = "danger";
    }elseif ($st=="Proses") {
      $stat = "warning";
    }elseif ($st=="Selesai") {
      $stat = "success";
    }elseif ($st=="Sudah diserahkan") {
      $stat = "info";
    }else {
      $stat = "default";
    }
    ?>
    <tr class="<?=$stat?>">
      <td><?=$n?></td>
      <td><?=$r['Nama']?></td>
      <td><?="0".$r['No_Hp']?></td>
      <td align="center">
        <?php
        $s_ktp = mysql_query("SELECT * FROM v_ktp WHERE Id_Penduduk = '$r[Id_Penduduk]'");
        if (mysql_num_rows($s_ktp) > 0) {
          echo "<i class='fa fa-check'></i>";
        }
        ?>
      </td>
      <td align="center">
        <?php
        $s_akte = mysql_query("SELECT * FROM v_akte WHERE Id_Penduduk = '$r[Id_Penduduk]'");
        if (mysql_num_rows($s_akte) > 0) {
          echo "<i class='fa fa-check'></i>";
        }
        ?>
      </td>
      <td align="center">
        <?php
        $s_kk = mysql_query("SELECT * FROM v_kk WHERE Id_Penduduk = '$r[Id_Penduduk]'");
        if (mysql_num_rows($s_kk) > 0) {
          echo "<i class='fa fa-check'></i>";
        }
        ?>
      </td>
      <td><?=$tgl?></td>
      <td><?=$st?></td>
    </tr>
  <?php $n++; } ?>
  </tbody>
</table>
<span class="label label-danger">Syarat belum lengkap</span>
<span class="label label-warning">Proses</span>
<span class="label label-success">Selesai</span>
<span class="label label-info">Sudah diserahkan</span>
<ul class="pagination pull-right">
  <li><a href="?page=laporan&hal=<?php echo $page -1 ?>"> < </a></li>
  <?php

for($x=1;$x<=$halaman;$x++){
  ?>
  <li  <?php if($page==$x){ echo " class='active' ";} ?>    ><a href="?page=laporan&hal=<?php echo $x ?>"><?php echo $x ?></a></li>
  <?php
}
?>
  <li><a href="?page=laporan&hal=<?php echo $page +1 ?>"> > </a></li>
</ul>
