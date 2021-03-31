<!DOCTYPE html>
<?php include "../db.php"; ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table align="center" width="100%">
    	<tr>
    		<td align="center"><img src="../assets/gbr/jbr.png" width="70"></td>
    		<td align="center"><h3>PEMERINTAH KABUPATEN JEMBER<br>KECAMATAN MUMBULSARI</h3></td>
    	</tr>
    </table>
    <hr>
    <br>
    <p align="center"><b>Data Penduduk</b></p>
    <table align="center" border="1" cellspacing="0">
      <tr>
        <td rowspan="2" align="center" width="20">No.</td>
        <td rowspan="2" align="center" width="180">Nama</td>
        <td rowspan="2" align="center" width="100">No. Tlpn</td>
        <td colspan="3" align="center">Pembuatan</td>
        <td rowspan="2" align="center" width="80">Tanggal <br>Pembuatan</td>
        <td rowspan="2" align="center" width="130">Status</td>
      </tr>

      <tr>
        <td align="center" width="35">KTP</td>
        <td align="center" width="35">AKTE</td>
        <td align="center" width="35">KK</td>
      </tr>
      <?php
      $s = mysql_query("select * from penduduk");
      $n = 1;
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
      ?>
      <tr>
        <td><?=$n?></td>
        <td><?=$r['Nama']?></td>
        <td><?="0".$r['No_Hp']?></td>
        <td align="center">
          <?php
          $s_ktp = mysql_query("SELECT * FROM v_ktp WHERE Id_Penduduk = '$r[Id_Penduduk]'");
          if (mysql_num_rows($s_ktp) > 0) {
            echo "Y";
          }
          ?>
        </td>
        <td align="center">
          <?php
          $s_akte = mysql_query("SELECT * FROM v_akte WHERE Id_Penduduk = '$r[Id_Penduduk]'");
          if (mysql_num_rows($s_akte) > 0) {
            echo "Y";
          }
          ?>
        </td>
        <td align="center">
          <?php
          $s_kk = mysql_query("SELECT * FROM v_kk WHERE Id_Penduduk = '$r[Id_Penduduk]'");
          if (mysql_num_rows($s_kk) > 0) {
            echo "Y";
          }
          ?>
        </td>
        <td><?=$tgl?></td>
        <td><?=$st?></td>
      </tr>
      <?php $n++; } ?>
    </table>
  </body>
</html>
