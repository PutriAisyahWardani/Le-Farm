<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM payment WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Transaksi Berhasil di hapus';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Pilih transaksi yang akan di hapus';
	}

	header('location: sales_new.php');
	
?>