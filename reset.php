<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	include 'includes/session.php';

	if(isset($_POST['reset'])){
		$email = $_POST['email'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			//generate code
			$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code=substr(str_shuffle($set), 0, 15);
			try{
				$stmt = $conn->prepare("UPDATE users SET reset_code=:code WHERE id=:id");
				$stmt->execute(['code'=>$code, 'id'=>$row['id']]);
				
				$message = "
					<h2>Password Reset</h2>
					<p>Your Account:</p>
					<p>Email: ".$email."</p>
					<p>Please click the link below to reset your password.</p>
					<a href='http://localhost/ecommerce/password_reset.php?code=".$code."&user=".$row['id']."'>Reset Password</a>
				";

				//Load phpmailer
	    		require 'vendor/autoload.php';

	    		$mail = new PHPMailer(true);                             
			    try {
			        //Server settings
			        $mail->isSMTP();                                     
			        $mail->Host = 'smtp.gmail.com';                      
			        $mail->SMTPAuth = true;                               
			        $mail->Username = 'testsourcecodester@gmail.com';     
			        $mail->Password = 'mysourcepass';                    
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'ssl';                           
			        $mail->Port = 465;                                   

			        $mail->setFrom('testsourcecodester@gmail.com');
			        
			        //Recipients
			        $mail->addAddress($email);              
			        $mail->addReplyTo('testsourcecodester@gmail.com');
			       
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = 'Reset password Lefarm';
			        $mail->Body    = $message;

			        $mail->send();

			        $_SESSION['success'] = 'Link reset password terkirim';
			     
			    } 
			    catch (Exception $e) {
			        $_SESSION['error'] = 'Pesan tidak dapat dikirim. Kesalahan pengirim: '.$mail->ErrorInfo;
			    }
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}
		else{
			$_SESSION['error'] = 'Email tidak ditemukan';
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Masukkan email yang ada';
	}

	header('location: password_forgot.php');

?>