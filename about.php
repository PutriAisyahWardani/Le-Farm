<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>

    <!-- banner -->
	  <section class="banner">
      <div class="banner"></div>
		  <h2>LELEFARM</h2>
	  </section>

    <section class="about">
      <div class="container">
        <h3>About</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita ipsa aliquid earum, quibusdam temporibus possimus mollitia libero ad, aliquam aspernatur sit fugiat eius in, voluptas maiores rem sapiente. Provident, doloremque voluptates ipsam et voluptatem error vitae voluptas itaque, deleniti numquam dicta, officiis ducimus. Voluptatem ea pariatur vero consequatur corrupti ad animi ducimus, tempore est natus! Accusamus quas earum nostrum ducimus ipsa quos inventore minus eum tempora iure nobis corporis, voluptate officiis deserunt harum, dolore quod? At cumque minima laboriosam cupiditate consequatur nulla veniam, nesciunt, recusandae facere odio deserunt voluptate numquam saepe illum? Facilis sunt beatae facere dolores porro mollitia iste!</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti quisquam omnis esse reprehenderit quod, corrupti aliquid sapiente laudantium, sequi aliquam soluta veritatis ratione vitae minus, ea unde labore quas! Quas, enim dolorum, a tempora sunt at aliquam aperiam ad tenetur totam sequi consectetur possimus voluptatem iure autem? Culpa, odit deserunt repellat quaerat voluptatibus soluta est voluptatum officia cum. Harum tempore accusantium quo voluptatibus, soluta aliquid ad, voluptates, officiis eligendi laboriosam eaque asperiores explicabo! Officiis quasi debitis cupiditate fugiat commodi exercitationem.</p>
      </div>
    </section>
   
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
  </body>
</html>