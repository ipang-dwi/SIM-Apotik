<?php  

	include 'conect.php';
		
		$ID=$_GET['ID'];
		$Nama= $_POST['Nama'];
		$jeniskelamin = $_POST['Jk'];
		$NoHP= $_POST['NoHP'];
		$Email = $_POST['Email'];
		$Alamat = $_POST['Alamat'];
		

	$q1 = "UPDATE pelanggan SET Nama='$Nama',Jk='$jeniskelamin', NoHP='$NoHP', Email='$Email', Alamat='$Alamat' WHERE ID ='$ID'";
		

		$SQL = mysqli_query($connect,$q1);
		echo "berhasil !";
		header("location:index.php?pesan=Edit");
	

?>