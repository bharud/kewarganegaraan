<?php 
$id=$_GET['id'];


$sql="DELETE FROM penduduk WHERE Id_Penduduk = '$id'";

$query=mysql_query($sql);

if($query){
		echo "<script>
				alert(\"Berhasil Hapus Data\")
				document.location=\"?page=datapen\"
				</script>";
	}else{
		echo "<script>
				alert(\"Gagal Update Data\")
				document.location=\"?page=datapen\"
				</script>";
	}

 ?>