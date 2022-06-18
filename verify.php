<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				if($row['status']){
					if(password_verify($password, $row['password'])){
						if($row['type']){
							$_SESSION['admin'] = $row['id'];
						}
						else{
							$_SESSION['user'] = $row['id'];
						}
					}
					else{
						$_SESSION['error'] = 'Password salah';
					}
				}
				else{
					$_SESSION['error'] = 'Akun tidak aktif.';
				}
			}
			else{
				$_SESSION['error'] = 'Email tidak ditemukan';
			}
		}
		catch(PDOException $e){
			echo "Terdapat masalah pada koneksi internet: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Isi data login terlebih dahulu';
	}

	$pdo->close();

	header('location: login.php');

?>