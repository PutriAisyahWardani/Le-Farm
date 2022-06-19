<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$tanggal = $_POST['tanggal'];
        $username = $_POST['username'];
        $transaction = $_POST['transaction'];
        $total = $_POST['total'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE payment SET tanggal=:tanggal, username=:username, transaction=:transaction, total=:total WHERE id=:id");
			$stmt->execute(['tanggal'=>$tanggal, 'username'=>$username, 'transaction'=>$transaction, 'total'=>$total, 'id'=>$id]);
			$_SESSION['success'] = 'Transaksi berhasil di update';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Isi formulir edit transaksi terlebih dahulu';
	}

	header('location: sales_new.php');

?>