<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from contact_us where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from contact_us order by id desc";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.css" rel="stylesheet" />

        <link href="assets/css/custom.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        

        <style>
            span {
                font-size: 22px;
            }
        </style>
    </head>
	<div class="content pb-0">
	    <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                    <div class="card-body">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <span>Kontak</span>
                    </div>
					<div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
								<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Nama</th>
							   <th>Email</th>
							   <th>Mobile</th>
							   <th>Keterangan</th>
							   <th>Tanggal</th>
							   <th></th>
							</tr>
                                </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['mobile']?></td>
							   <td><?php echo $row['comment']?></td>
							   <td><?php echo $row['added_on']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>