<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$tanggal = $_POST['tanggal'];
        $username = $_POST['username'];
        $transaction = $_POST['transaction'];
        $total = $_POST['total'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM payment WHERE transaction=:transaction");
		$stmt->execute(['transaction'=>$transaction]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Transaksi ini sudah ada';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO payment (tanggal, username, transaction, total) VALUES (:date, :name, :transaction, :total)");
				$stmt->execute(['tanggal'=>$tanggal, 'username'=>$username, 'transaction'=>$transaction, 'total'=>$total]);
				$_SESSION['success'] = 'Transaksi berhasil ditambahkan';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Lengkapi form';
	}

	header('location: sales_new.php');

?>