<?php
require('top.inc.php');
isAdmin();
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
                font-size: 14px;
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
					<h4 class="box-title">Pesanan </h4>
                    </div>
					<div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
								<tr>
									<th class="product-thumbnail">ID</th>
									<th class="product-name"><span class="nobr">Tanggal Pesan</span></th>
									<th class="product-price"><span class="nobr"> Alamat </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Jenis Pembayaran </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Status Pembayaran </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Status Pesanan </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Detail Pengiriman </span></th>
								</tr>
                                </thead>
							<tbody>
								<?php
								$res=mysqli_query($con,"select `order`.*,order_status.name as order_status_str from `order`,order_status where order_status.id=`order`.order_status order by `order`.id desc");
								while($row=mysqli_fetch_assoc($res)){
								?>
								<tr>
									<td class="product-add-to-cart"><a href="order_master_detail.php?id=<?php echo $row['id']?>"> <?php echo $row['id']?></a><br/>
									<td class="product-name"><?php echo $row['added_on']?></td>
									<td class="product-name">
									<?php echo $row['address']?><br/>
									<?php echo $row['city']?><br/>
									<?php echo $row['pincode']?>
									</td>
									<td class="product-name"><?php echo $row['payment_type']?></td>
									<td class="product-name"><?php echo $row['payment_status']?></td>
									<td class="product-name"><?php echo $row['order_status_str']?></td>
									<td class="product-name">
									<?php 
									echo "Order Id:- ".$row['ship_order_id'].'<br/>';
									echo "Shipment Id:- ".$row['ship_shipment_id'];
									
									?></td>
									
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