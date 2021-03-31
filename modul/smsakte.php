<?php
$id = $_GET['id'];

$pen = mysql_fetch_array(mysql_query("SELECT * FROM penduduk WHERE Id_Penduduk = '$id'"));
$no = "0".$pen['No_Hp'];

$kr = mysql_query("INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID) VALUES ('$no', 'Pembuatan Akte atas nama $pen[Nama] Telah selesai, silahkan mengambil di kantor desa lengkong', 'Gammu 1.31.0')");

if($kr){
		echo "<script>
				alert(\"Pesan telah dikirim\")
				document.location=\"?page=dataktp\"
				</script>";
	}else{
		echo "<script>
				alert(\"Pesan gagal dikirim\")
				document.location=\"?page=dataktp\"
				</script>";
	}
?>