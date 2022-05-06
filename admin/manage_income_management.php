<?php
require('top.inc.php');
isAdmin();
$tanggal='';
$minggu='';
$pendapatan='';
$keterangan='';

$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from income where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$tanggal=$row['tanggal'];
		$pendapatan=$row['pendapatan'];
		$keterangan=$row['keterangan'];
		$minggu=$row['minggu'];
	}else{
		header('location:income.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$tanggal=get_safe_value($con,$_POST['tanggal']);
	$pendapatan=get_safe_value($con,$_POST['pendapatan']);
	$keterangan=get_safe_value($con,$_POST['keterangan']);
	$minggu=get_safe_value($con,$_POST['minggu']);
	
	$res=mysqli_query($con,"select * from income where tanggal='$tanggal'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Tanggal hari in sudah terisi";
			}
		}else{
			$msg="Tanggal hari in sudah terisi";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$update_sql="update income set tanggal='$tanggal',minggu='$minggu',pendapatan='$pendapatan',keterangan='$keterangan' where id='$id'";
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into income(tanggal,minggu,pendapatan,keterangan,role,status) values('$tanggal','$minggu','$pendapatan','$keterangan',1,1)");
		}
		header('location:income.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Pendapatan</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							
								<div class="form-group">
									<label for="tanggal" class=" form-control-label">Tanggal</label>
									<input type="text" name="tanggal" placeholder="Enter tanggal" class="form-control" required value="<?php echo $tanggal?>">
								</div>
								<div class="form-group">
									<label for="minggu" class=" form-control-label">Minggu ke</label>
									<input type="text" name="minggu" placeholder="Enter minggu" class="form-control" required value="<?php echo $minggu?>">
								</div>
								
								<div class="form-group">
									<label for="pendapatan" class=" form-control-label">Pendapatan</label>
									<input type="pendapatan" name="pendapatan" placeholder="Enter pendapatan" class="form-control" required value="<?php echo $pendapatan?>">
								</div>
								<div class="form-group">
									<label for="keterangan" class=" form-control-label">Keterangan</label>
									<input type="text" name="keterangan" placeholder="Enter keterangan" class="form-control" required value="<?php echo $keterangan?>">
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Simpan</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 
         
<?php
require('footer.inc.php');
?>