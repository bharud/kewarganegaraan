<?php 
$id=$_GET['id'];


$sql="DELETE FROM karyawan WHERE Id_Karyawan = '$id'";

$query=mysql_query($sql);

if($query){
		echo "<script>
				alert(\"Berhasil Hapus Data\")
				document.location=\"?page=karyawan\"
				</script>";
	}else{
		echo "<script>
				alert(\"Gagal Update Data\")
				document.location=\"?page=karyawan\"
				</script>";
	}

 ?>