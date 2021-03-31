<div class="col-sm-6">
<form method='POST' action=''>
<?php
      $id = $_GET['id'];
      $redit = mysql_fetch_array(mysql_query("SELECT * FROM karyawan WHERE Id_Karyawan = '$id'"));
      ?>
  				<div class="form-group">
            <label>NIP </label>
          	<input name="nip" type="text" required class="form-control" value="<?=$redit[NIP]?>" placeholder="Masukkan NIP">
     			</div>
          <div class="form-group">
            <label>Jabatan </label>
            <input name="jabatan" type="text" required class="form-control" value="<?=$redit[Jabatan]?>" placeholder="Masukkan Jabatan">
          </div>
          <div class="form-group">
            <label>Status Kawin </label>
            <select name="status" class="form-control">
              <option value="">-- Pilih Status Perkawianan --</option>
              <option value="Belum Menikah" <?php if ($redit['Satatus_Kawin']=="Belum Menikah") { echo "selected"; } ?>>Belum Menikah</option>
              <option value="Menikah" <?php if ($redit['Satatus_Kawin']=="Menikah") { echo "selected"; } ?>>Menikah</option>
              <option value="Janda" <?php if ($redit['Satatus_Kawin']=="Janda") { echo "selected"; } ?>>Janda</option>
              <option value="Duda" <?php if ($redit['Satatus_Kawin']=="Duda") { echo "selected"; } ?>>Duda</option>
            </select>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jkel" class="form-control">
              <option value="">-- Pilih Jenis Kelamin --</option>
              <option value="P" <?php if ($redit['Jenis_Kelamin']=="P") { echo "selected"; } ?>>Pria</option>
              <option value="W" <?php if ($redit['Jenis_Kelamin']=="W") { echo "selected"; } ?>>Wanita</option>
            </select>
          </div>
          <div class="form-group">
            <label>Agama</label>
            <select name="agama" class="form-control">
              <option value="">-- Pilih Agama --</option>
              <option value="Islam" <?php if ($redit['Agama']=="Islam") { echo "selected"; } ?>>Islam</option>
              <option value="Kristen" <?php if ($redit['Agama']=="Kristen") { echo "selected"; } ?>>Kristen</option>
              <option value="Katholik" <?php if ($redit['Agama']=="Katholik") { echo "selected"; } ?>>Katholik</option>
              <option value="Hindu" <?php if ($redit['Agama']=="Hindu") { echo "selected"; } ?>>Hindu</option>
              <option value="Budha" <?php if ($redit['Agama']=="Budha") { echo "selected"; } ?>>Budha</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nama </label>
            <input name="nama" type="text" required class="form-control" value="<?=$redit[Nama]?>" placeholder="Masukkan Nama Lengkap">
          </div>
          <div class="form-group">
            <label>Tempat Lahir </label>
            <input name="tempatlah" type="text" required class="form-control" value="<?=$redit[Tempat_Lahir]?>" placeholder="Masukkan Tempat Lahir">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir </label>
            <input type="date" name="tglhr" required class="form-control" value="<?=$redit[Tanggal_Lahir]?>" required>
          </div>
          <div class="form-group">
            <label>Alamat </label>
            <textarea class="form-control" required name="alamat" rows="2"><?=$redit[Alamat]?></textarea>
          </div>
          <div class="form-group">
            <label>Mulai kerja</label>
            <input type="date" name="tglkrj" required value="<?=$redit[Mulai_Kerja]?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Pendidikan</label>
            <select name="pendidikan" class="form-control">
              <option value="">-- Pilih Pendidikan --</option>
              <option value="SMA" <?php if ($redit['Pendidikan']=="SMA") { echo "selected"; } ?>>SMA</option>
              <option value="SMK" <?php if ($redit['Pendidikan']=="SMK") { echo "selected"; } ?>>SMK</option>
              <option value="D1" <?php if ($redit['Pendidikan']=="D1") { echo "selected"; } ?>>D1</option>
              <option value="D2" <?php if ($redit['Pendidikan']=="D2") { echo "selected"; } ?>>D2</option>
              <option value="D3" <?php if ($redit['Pendidikan']=="D3") { echo "selected"; } ?>>D3</option>
              <option value="D4" <?php if ($redit['Pendidikan']=="D4") { echo "selected"; } ?>>D4</option>
              <option value="S1" <?php if ($redit['Pendidikan']=="S1") { echo "selected"; } ?>>S1</option>
              <option value="S2" <?php if ($redit['Pendidikan']=="S2") { echo "selected"; } ?>>S2</option>
              <option value="S3" <?php if ($redit['Pendidikan']=="S3") { echo "selected"; } ?>>S3</option>
            </select>
          </div>
          <div class="form-group">
            <label>No. Telepon </label>
            <div class="input-group">
              <span class="input-group-addon">
                +62
              </span>
              <input name="nohp" class="form-control input-mask-phone" value="<?=$redit[No_Hp]?>" type="text"/>
            </div>
          </div>
          <div class="form-group">
            <label>Nomor Rekening </label>
            <input name="norek" type="text" required class="form-control" value="<?=$redit[No_Rekening]?>" placeholder="Masukkan Nomor Rekening">
          </div>
          <div class="form-group">
            <label>Nama Bank </label>
            <input name="nmbnk" type="text" required class="form-control" value="<?=$redit[Nama_Bank]?>" placeholder="Masukkan Nama Bank">
          </div>
          <div class="form-group">
            <label>Username </label>
            <input name="user" type="text" required class="form-control" value="<?=$redit[Username]?>" placeholder="Masukkan Username">
          </div>
          <div class="form-group">
            <label>Password </label>
            <input name="pass" type="password" required class="form-control" value="<?=$redit[Password]?>" placeholder="Masukkan Password">
          </div>
    				<button name ="simpanuser" type="submit" value="simpan" class="btn btn-bold btn-white btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button name ="resetuser" type="reset" class="btn btn-white btn-bold btn-default"><i class="fa fa-refresh"></i> Reset</button>
          </form>
          </div>
<?php 
  if (isset($_POST['simpanuser'])) {
    $su = mysql_query("UPDATE karyawan SET NIP='$_POST[nip]',Jabatan='$_POST[jabatan]',Status_Kawin='$_POST[status]',Jenis_Kelamin='$_POST[jkel]',Agama='$_POST[agama]',Nama='$_POST[nama]',Tempat_Lahir='$_POST[tempatlah]',Tanggal_Lahir='$_POST[tglhr]',Alamat='$_POST[alamat]',Mulai_Kerja='$_POST[kerja]',Pendidikan='$_POST[pendidikan]',No_Hp='$_POST[nohp]',No_Rekening='$_POST[norek]',Bank='$_POST[nmbnk]',Username='$_POST[user]',Password='$_POST[pass]' WHERE Id_Karyawan = '$id'");
    if ($su) {
      echo "<script>
        alert(\"Berhasil Update User\")
        document.location=\"?page=karyawan\"
        </script>";
    }else{
      echo "<script>
        alert(\"Gagal Update User\")
        document.location=\"?page=karyawan\"
        </script>";
    }
  }
  ?>