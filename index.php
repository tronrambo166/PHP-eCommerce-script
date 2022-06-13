<?php   session_start();
include "admin/universals/sessions.php";
include "admin/universals/class.php";


?>




<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />

	
</head>



<body>
	
	
	<div class="container-fluid one">
	
	<!-- Header -->
	
	<div class="container">
	
	
	
	<div class="row py-3">
	
	<div class="col-sm-4">	<img style="width:170px" src="images/logo.png" alt="" /> <br /> <b>Tottenham's Online Store</b>       </div>

	
	
	<div class="col-sm-8 mt-3 ">
	<div class="row">
		<div class="col-sm-4">
		
		
		
		</div>
		
		
		<div class="col-sm-4"> 
		
         <div class="cart w-100   bg-light ">  <span style="display: inline-block; margin-top: 8px; "
		class="ml-5  text-dark">Cart <a style="width: 36px;height: 25px" href="pages/cart.php" class="btn btn-dark rounded-circle font-weight-bold">
		
		<span style="margin-top: -5px; display: block" class="text-danger"><?php if(isset($_SESSION['cart_no'])) {echo  $_SESSION['cart_no']; } else echo "0";?></span></a></span>
		
		</div>			
		
		</div>
		
		
		
		<div class="col-sm-4">
		
		<?php if(! isset($_SESSION['login']) && !isset ($_COOKIE['log_cookie']) ) { ?>
		
		<a href="pages/login.php" class="btn btn-dark m-3  w-75">Login </a>
		<h4 class=" h6 text-danger text-center"><?php echo Session::show('logout');?></h4>
		
		<?php  }  else {?>
		<a onclick="return confirm('Are you sure to log out ?')" href="pages/logout.php" class="btn btn-dark m-3  w-75">Logout </a>
		
		<h4 class=" w-100 profile h6 my-0 text-success font-weight-bold font-italic text-center" >Welcome, 
		   <?php if(isset($_COOKIE['log_name'])) { list($name)=explode(' ',$_COOKIE['log_name']); echo $name; } ?></h4>
		  
		  <a class="w-100 my-0 d-inline-block text-center" href="pages/profile.php?id=<?php echo $_COOKIE['log_id'];?>"><b>Profile</b></a>

				
				<h4 class=" h6 text-success text-center"><?php echo Session::show('login');?></h4>

		
		<?php  }  ?>
		
		</div>
		
		
		
		
	</div>
	
	
	</div>
	</div>
	
	<!-- Head/Logo -->
	
	
	<div class="clearfix"></div>
	
	
	<!-- Menu -->
	
	
	
		<div class="row py-4">
		
			
			
			<div class="navbar navbar-expand-sm bg-dark p-0 w-100 navy">
				<ul class="navbar-nav">
					<li class="nav-item py-1 px-3 bg-dark border-right "><a href="index.php" class="text-light nav-link">HOME</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="pages/products.php" class="text-light nav-link">PRODUCTS</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="pages/brands.php" class="text-light nav-link">TOP BRANDS</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="pages/cart.php" class="text-light nav-link">CART</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="pages/savelist.php" class="text-light nav-link">SAVELIST</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="pages/contact.php" class="text-light nav-link">CONTACT</a></li>
				</ul>
			</div>
			
			
			
		</div>
		
		<!-- Menu -->
		
		
		
		
		<!-- Body -->
		
		<div class="row content">
		
		
			<!-- Section half -->
		
			<div class="col-sm-6 ads" >
			<div class="row mb-2">
			
			<div class="col-sm-6  ">
			<div class="row   single_l border   ">
			<div class="col-sm-6">
				
				<img src="images/hp.jpg" alt="" class="d-block m-auto" />
				
				</div>
				
				<div class="col-sm-6">
				
				<h2>HP</h2>
				<p class="py-2" style="color:#6c6e69; font: italic 14px/24px 'OpenSans';text-align:left" >Lorem ipsum dolor sit amet, elit. 
				</p>
				<a href="pages/details.php?id=1" style="border-radius:4px;font-size: 13px;height:34px;font-weight:bold;color:#000"
				class="w-100 m-auto bg-info text-center font-italic ">Add to cart</a>
				
				</div>
			
			
			</div>
			</div>
			
			
			<div class="col-sm-6  ">
			<div class="row   single_r border   ">
			<div class="col-sm-6">
				
				<img src="images/moto.jpg" alt="" class="d-block m-auto" />
				
				</div>
				
				<div class="col-sm-6">
				
				<h2>Moto</h2>
				<p class="py-2" style="color:#6c6e69; font: italic 14px/24px 'OpenSans';text-align:left" >Lorem ipsum dolor sit amet, elit. 
				</p>
				<a href="pages/details.php?id=42" style="border-radius:4px;font-size: 13px;height:34px;font-weight:bold;color:#000"
				class="w-100 m-auto bg-info text-center font-italic ">Add to cart</a>
				
				</div>
			
			
			</div>
			</div>			
			
			
			</div>
			
			
			
		<div class="row mb-2">
			
			<div class="col-sm-6  ">
			<div class="row   single_l border   ">
			<div class="col-sm-6">
				
				<img src="images/asus.jpg" alt="" class="d-block m-auto" />
				
				</div>
				
				<div class="col-sm-6">
				
				<h2>ASUS</h2>
				<p class="py-2" style="color:#6c6e69; font: italic 14px/24px 'OpenSans';text-align:left" >Lorem ipsum dolor sit amet, elit. 
				</p>
				<a href="pages/details.php?id=41" style="border-radius:4px;font-size: 13px;height:34px;font-weight:bold;color:#000"
				class="w-100 m-auto bg-info text-center font-italic ">Add to cart</a>
				
				</div>
			
			
			</div>
			</div>
			
			
			<div class="col-sm-6  ">
			<div class="row   single_r border   ">
			<div class="col-sm-6">
				
				<img src="images/tot.jpg" alt="" class="d-block m-auto" />
				
				</div>
				
				<div class="col-sm-6">
				
				<h2>KITS</h2>
				<p class="py-2" style="color:#6c6e69; font: italic 14px/24px 'OpenSans';text-align:left" >Lorem ipsum dolor sit amet, elit. 
				</p>
				<a href="pages/details.php?id=40" style="border-radius:4px;font-size: 13px;height:34px;font-weight:bold;color:#000"
				class="w-100 m-auto bg-info text-center font-italic ">Add to cart</a>
				
				</div>
			
			
			</div>
			</div>			
			
			
			</div>
			
			
			
			</div>
			
			
			<!-- Section half -->
			
			
			
			
			<!-- Section 2nd half			-->
			
			<div class="col-sm-6">
			
			<div style="padding-bottom: 13px"class="row bg-dark 2half">
			
			<div class="col-sm-6 "><img style="width:240px; height:367px" src="images/preview-img.jpg" alt="" /></div>
			
			
			
			<div class="col-sm-6 ">
			
			<h1  class="my-2">TABLET <br /> <span class="text-primary">4S 32GB</span></h1>
			
			<p style="color:#D9963E; font: italic 14px/24px 'OpenSans';text-align:left"  class="ml-1">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit. 	</p>
			
			<a href="pages/details.php?id=39" class="text-center my-5 bg-info text-dark w-50 mx-auto" style="" >Shop now</a>
			</div>
			
			</div>
			
		</div>
		
	</div>
	
	
		<!-- Section 2nd half			-->
	
	
	
	
	
	
		<!-- Lower Section			-->
	
		
			<div class="row mt-3">
				<h3 class="h3 bg-light border py-1 w-100 text-dark font-weight-bold">Feature Products</h3>
			</div>
			 
			<div class="row pt-1 pb-4 section">
				
				
				
				<?php  
				$sel="select * from products order by ID DESC"; $res=$db->select($sel); $cnt=1;
				
				while($row=$res->fetch_assoc() ) { if($row['Status']==0 && $cnt<5) { ?>
				
				
				<div class="col-sm-3 sec1 ">
				
				<div class="border">
				<img src="admin/options/images/<?php echo $row['Image']?> " alt="" class="d-block m-auto" />
				<h3 class="text-dark" ><?php echo $row['pName']?></h3>
				<p class="py-1 text-center" style="color:#6c6e69; font: italic 14px/24px 'OpenSans';text-align:left" >
				           <?php $des= Format::seemore($row['Description'],50); echo $des;?>  </p>
				
				<h4 class="h5 text-success text-center font-weight-bold"> $<?php echo $row['Price']?>.00</h4>
				
				<a href="pages/details.php?id=<?php echo $row['ID']; ?>" style="border-radius:6px;height:34px;font-weight:bold"
				class="w-50 m-auto bg-primary text-dark text-center font-italic ">Details</a>
				
				
				</div>
				</div>
				
				<?php $cnt++;  } } ?>
				
				
			</div>
			
			
			
			
			<div class="row pt-4">
				<h3 class=" h3 bg-light border py-1 w-100 text-dark font-weight-bold">New Products</h3>
			</div>
			 
			
			<div class="row pt-1 pb-4 section">
				
				
				
				<?php  
				$sel="select * from products order by ID DESC"; $res=$db->select($sel); $cnt=1;
				
				while($row=$res->fetch_assoc() ) { if($row['Status']==1 && $cnt<5) { ?>
				
				
				<div class="col-sm-3 sec1 ">
				
				<div class="border">
				<img src="admin/options/images/<?php echo $row['Image']?> " alt="" class="d-block m-auto" />
				<h3 class="text-dark" ><?php echo $row['pName']?></h3>
				<p class="py-1 text-center" style="color:#6c6e69; font: italic 14px/24px 'OpenSans';text-align:left" >
				           <?php $des= Format::seemore($row['Description'],50); echo $des;?>  </p>
				
				<h4 class="h5 text-success text-center font-weight-bold"> $<?php echo $row['Price']?>.00</h4>
				
				<a href="pages/details.php?id=<?php echo $row['ID']; ?>" style="border-radius:6px;height:34px;font-weight:bold"
				class="w-50 m-auto bg-primary text-dark text-center font-italic ">Details</a>
				
				
				</div>
				</div>
				
				<?php $cnt++;  } } ?>
				
				
				

				
			</div>
			
			
			
		</div>
	</div>
	
	
	
	<div class="container-fluid two ">
		<div class="container">
			<div class="row py-5">
			
				<div class="col-sm-4">
					<h4>Why Buy Us ?</h4>
					<p class="text-secondary">lorem ipsum is the best product
					lorem ipsum is the best product
					lorem ipsum is the best product
					lorem ipsum is the best product</p>
				</div>
				
				<div class="col-sm-4">
					<h4>My Account</h4>
					<a class="border-bottom border-secondary" href="pages/login.php">Sign In</a>
					<a class="border-bottom border-secondary"href="pages/cart.php">View Cart</a>
					<a class="border-bottom border-secondary"href="pages/contact.php">Help</a>
					
				</div>
				
				
				
				
				<div class="col-sm-4">
					<h4>Follow Us</h4>
					<a class="border-bottom border-secondary"href=""><i class="mr-2 fa fa-twitter"></i> Twitter</a>
					<a class="border-bottom border-secondary"href=""><i class="mr-2 fa fa-facebook-square"></i> Facebook</a>
					<a class="border-bottom border-secondary"href=""><i class="mr-2 fa fa-google-plus-square"></i> Google + </a>
					
				</div>
				
				
			</div>
			
			
			
		</div>
		
		<footer>
			<div class="row fix bg-dark">
				<p class="m-auto font-italic text-secondary py-3">&copy; Copyright 2020. Tottenham All Rights Reserved</p>
			</div>
		</footer>
		
	</div>
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</body>
</html>