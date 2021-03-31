<div class="col-sm-6">
      <form method='POST' action=''>
      <?php
      $id = $_GET['id'];
      $redit = mysql_fetch_array(mysql_query("SELECT * FROM penduduk WHERE Id_Penduduk = '$id'"));
      ?>
              <div class="form-group">
                <label>Nama Lengkap </label>
                <input name="nama" type="text" required class="form-control" value="<?=$redit[Nama]?>" placeholder="Masukkan Nama Lengkap">
              </div>
              <div class="form-group">
                <label>Alamat </label>
                <textarea class="form-control" required name="alamat" rows="2"><?=$redit[Alamat]?></textarea>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select name="agama" class="form-control">
                  <option value="">-- Pilih Agama --</option>
                  <option value="Islam" <?php if ($redit['Agama'] == "Islam") { echo "selected"; } ?>>Islam</option>
                  <option value="Kristen" <?php if ($redit['Agama'] == "Kristen") { echo "selected"; } ?>>Kristen</option>
                  <option value="Katholik" <?php if ($redit['Agama'] == "Katholik") { echo "selected"; } ?>>Katholik</option>
                  <option value="Hindu" <?php if ($redit['Agama'] == "Hindu") { echo "selected"; } ?>>Hindu</option>
                  <option value="Budha" <?php if ($redit['Agama'] == "Budha") { echo "selected"; } ?>>Budha</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jkel" class="form-control">
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  <option value="P" <?php if ($redit['Jenis_Kelamin'] == "P") { echo "selected"; } ?>>Pria</option>
                  <option value="W" <?php if ($redit['Jenis_Kelamin'] == "W") { echo "selected"; } ?>>Wanita</option>
                </select>
              </div>
              <div class="form-group">
                <label>Status Kawin </label>
                <select name="status" class="form-control">
                  <option value="">-- Pilih Satatus Perkawianan --</option>
                  <option value="Belum Menikah" <?php if ($redit['Satatus_Kawin'] == "Belum Menikah") { echo "selected"; } ?>>Belum Menikah</option>
                  <option value="Menikah" <?php if ($redit['Satatus_Kawin'] == "Menikah") { echo "selected"; } ?>>Menikah</option>
                  <option value="Janda" <?php if ($redit['Satatus_Kawin'] == "Janda") { echo "selected"; } ?>>Janda</option>
                  <option value="Duda" <?php if ($redit['Satatus_Kawin'] == "Duda") { echo "selected"; } ?>>Duda</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kecamatan</label>
                <input name="kec" type="text" required class="form-control" value="<?=$redit[Kecamatan]?>" placeholder="Masukkan Nama Kecamatan">
              </div>
              <div class="form-group">
                <label>Desa</label>
                <input name="desa" type="text" required class="form-control" value="<?=$redit[Desa]?>" placeholder="Masukkan Nama Desa">
              </div>
              <div class="form-group">
                <label>Dusun</label>
                <input name="dusun" type="text" required class="form-control" value="<?=$redit[Dusun]?>" placeholder="Masukkan Nama Dusun">
              </div>
              <div class="form-group">
                <label>Pendidikan</label>
                <select name="pendidikan" class="form-control">
                  <option value="">-- Pilih Pendidikan --</option>
                  <option value="SD" <?php if ($redit['Pendidikan'] == "SD") { echo "selected"; } ?>>SD</option>
                  <option value="SMP" <?php if ($redit['Pendidikan'] == "SMP") { echo "selected"; } ?>>SMP</option>
                  <option value="SMA" <?php if ($redit['Pendidikan'] == "SMA") { echo "selected"; } ?>>SMA</option>
                  <option value="SMK" <?php if ($redit['Pendidikan'] == "SMK") { echo "selected"; } ?>>SMK</option>
                  <option value="D1" <?php if ($redit['Pendidikan'] == "D1") { echo "selected"; } ?>>D1</option>
                  <option value="D2" <?php if ($redit['Pendidikan'] == "D2") { echo "selected"; } ?>>D2</option>
                  <option value="D3" <?php if ($redit['Pendidikan'] == "D3") { echo "selected"; } ?>>D3</option>
                  <option value="D4" <?php if ($redit['Pendidikan'] == "D4") { echo "selected"; } ?>>D4</option>
                  <option value="S1" <?php if ($redit['Pendidikan'] == "S1") { echo "selected"; } ?>>S1</option>
                  <option value="S2" <?php if ($redit['Pendidikan'] == "S2") { echo "selected"; } ?>>S2</option>
                  <option value="S3" <?php if ($redit['Pendidikan'] == "S3") { echo "selected"; } ?>>S3</option>
                </select>
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input name="kerja" type="text" class="form-control" value="<?=$redit[Pekerjaan]?>" placeholder="Masukkan Pekerjaan">
              </div>
              <div class="form-group">
                <label>No. Telepon</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    +62
                  </span>
                  <input name="nohp" class="form-control input-mask-phone" value="<?=$redit[No_Hp]?>" type="text"/>
                </div>
              </div>
              <div class="form-group">
                <label>Anak Ke-</label>
                <input name="anak" type="number" required value="<?=$redit[Anak_Ke]?>" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Ayah</label>
                <input name="ayah" type="text" required class="form-control" value="<?=$redit[Nama_Ayah]?>" placeholder="Masukkan Nama Ayah">
              </div>
              <div class="form-group">
                <label>Nama Ibu</label>
                <input name="ibu" type="text" required class="form-control" value="<?=$redit[Nama_Ibu]?>" placeholder="Masukkan Nama Ibu">
              </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input name="tempatlah" type="text" required class="form-control" value="<?=$redit[Tempat_Lahir]?>" placeholder="Masukkan Tempat Lahir">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir </label>
                <input type="date" name="tglhr" required value="<?=$redit[Tanggal_Lahir]?>" class="form-control" required>
              </div>
            <button name ="simpanuser" type="submit" value="simpan" class="btn btn-bold btn-white btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </form>
</div>

<?php 
  if (isset($_POST['simpanuser'])) {
    $su = mysql_query("UPDATE penduduk SET Nama='$_POST[nama]',Alamat='$_POST[alamat]',Agama='$_POST[agama]',Jenis_Kelamin='$_POST[jkel]',Satatus_Kawin='$_POST[status]',Kecamatan='$_POST[kec]',Desa='$_POST[desa]',Dusun='$_POST[dusun]',Pendidikan='$_POST[pendidikan]',Pekerjaan='$_POST[kerja]',No_Hp='$_POST[nohp]',Anak_Ke='$_POST[anak]',Nama_Ayah='$_POST[ayah]',Nama_Ibu='$_POST[ibu]',Tempat_Lahir='$_POST[tempatlah]',Tanggal_Lahir='$_POST[tglhr]' WHERE Id_Penduduk = '$id'");
    if ($su) {
      echo "<script>
        alert(\"Berhasil Update Penduduk\")
        document.location=\"?page=datapen\"
        </script>";
    }else{
      echo "<script>
        alert(\"Gagal Update Penduduk\")
        document.location=\"?page=datapen\"
        </script>";
    }
  }
  ?>