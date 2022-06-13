
<?php   session_start();
include "../admin/universals/sessions.php";
include "../admin/universals/class.php";

if(isset($_POST['go'])  && $_POST['go']!=''){
       $search=$_POST['search']; $res=$all->searchpro($search);
}

?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="../style.css" />

<link rel="stylesheet" href="../menu_footer.css" />
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
		
		<form action="" method="POST" class="form-inline  mt-3"  >
			<input name="search" class="form-control w-75 d-inine"  type="text" placeholder="Search Product"
    <?php  if(isset($_POST['go'])  && $_POST['go']!=''){ ?>	value="<?php echo $search; } ?>"		/>
			<input class="d-inine py-1 bg-primary" type="submit" name="go" value="GO" />
			
			
			</form>
		
		</div>
		
		
		<div class="col-sm-4"> 
		
         <div class="cart w-100   bg-light ">  <span style="display: inline-block; margin-top: 8px; "
		class="ml-5  text-dark">Cart <a style="width: 36px;height: 25px" href="cart.php" class="btn btn-dark rounded-circle font-weight-bold">
		
		<span style="margin-top: -5px; display: block" class="text-danger"><?php if(isset($_SESSION['cart_no'])) {echo  $_SESSION['cart_no']; } else echo "0";?></span></a></span>
		
		</div>			
		
		</div>
		
		
		
		<div class="col-sm-4">
		
		<?php if(! isset($_SESSION['login']) && !isset ($_COOKIE['log_cookie']) ) { ?>
		
		<a href="login.php" class="btn btn-dark m-3  w-75">Login </a>
		<h4 class=" h6 text-danger text-center"><?php echo Session::show('logout');?></h4>
		
		<?php  }  else {?>
		<a onclick="return confirm('Are you sure to log out ?')" href="logout.php" class="btn btn-dark m-3  w-75">Logout </a>
		
		<h4 class=" w-100 profile h6 my-0 text-success font-weight-bold font-italic text-center" >Welcome, 
		   <?php list($name)=explode(' ',$_COOKIE['log_name']); echo $name; ?></h4>
		  
		  <a class="w-100 my-0 d-inline-block text-center" href="profile.php?id=<?php echo $_COOKIE['log_id'];?>"><b>Profile</b></a>

				
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
					<li class="nav-item py-1 px-3 bg-dark border-right "><a href="../index.php" class="text-light nav-link">HOME</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="products.php" class="text-light nav-link">PRODUCTS</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="brands.php" class="text-light nav-link">TOP BRANDS</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="cart.php" class="text-light nav-link">CART</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="savelist.php" class="text-light nav-link">SAVELIST</a></li>
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="contact.php" class="text-light nav-link">CONTACT</a></li>
				</ul>
			</div>
			
			
			
		</div>
		</div>
		
		<!-- Menu -->
		
		
		
		
		<!-- Body -->
		
		<div class="container">
		
		
		<div class="content">
    	<div class="content_top">
    		<div class="heading w-100">
    		<h3 class="text-center text-dark font-italic font-weight-bold w-100">All Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	     

        <div class="w-100">
		
		 <div style="width:80%" class="section group float-left">
				<div class="row ml-0">
				
				
				<?php  
				
				if(isset($_POST['go'])  && $_POST['go']!=''){ $cnt=0;

         while($row=$res->fetch_assoc()){   $cnt=1; ?>
				
				
				<div class="col-sm-3 sec1 <?php if($cnt%4==0) { ?> mb-5 <?php } ?>">
				
				<div class="border">
				<img src="../admin/options/images/<?php echo $row['Image']?> " alt="" class="d-block m-auto" />
				<h3 class="text-dark" ><?php echo $row['pName']?></h3>
				<p class="py-1 text-center" style="color:#6c6e69; font: italic 14px/24px 'OpenSans';text-align:left" >
				           <?php $des= Format::seemore($row['Description'],50); echo $des; ?>  </p>
				
				<h4 class="h5 text-success text-center font-weight-bold"> $<?php echo $row['Price']?>.00</h4>
				
				<a href="details.php?id=<?php echo $row['ID']?>" style="border-radius:6px;height:34px;font-weight:bold"
				class="w-50 m-auto bg-primary text-dark text-center font-italic ">Details</a>
				
				
				</div>
				</div>
				
				<?php $cnt++;    }  if($cnt==0) echo "<h2 class='w-100 text-center'>Not Found !</h2>"; } else { 
	
	
	
				
				$sel="select * from products order by ID DESC"; $res=$db->select($sel); $cnt=1;
				
				while($row=$res->fetch_assoc() ) { ?>
				
				
				<div class="col-sm-3 sec1 <?php if($cnt%4==0) { ?> mb-5 <?php } ?>">
				
				<div class="border">
				<img src="../admin/options/images/<?php echo $row['Image']?> " alt="" class="d-block m-auto" />
				<h3 class="text-dark" ><?php echo $row['pName']?></h3>
				<p class="py-1 text-center" style="color:#6c6e69; font: italic 14px/24px 'OpenSans';text-align:left" >
				           <?php $des= Format::seemore($row['Description'],50); echo $des; ?>  </p>
				
				<h4 class="h5 text-success text-center font-weight-bold"> $<?php echo $row['Price']?>.00</h4>
				
				<a href="details.php?id=<?php echo $row['ID']?>" style="border-radius:6px;height:34px;font-weight:bold"
				class="w-50 m-auto bg-primary text-dark text-center font-italic ">Details</a>
				
				
				</div>
				</div>
				
				<?php $cnt++;    } } ?>
				
				</div>
				
				
			</div>
		
		
		<div style="width:18%"class=" ml-2 float-right category">
		<h3 class="bg-dark text-light mt-0">Categories</h3>
		
		  <?php 
		     $sel="select * from category";
		      $res=$db->select($sel);


		  while($row=$res->fetch_assoc() ) { ?>
		  
		<a href="cat_single.php?id=<?php   echo $row['ID']; ?>" class="w-100 text-secondary text-center">   <b class="  bg-light">    <?php   echo $row['catName']; ?>     </b> </a>
		
		  <?php   } ?>
		</div>
		
		
		
		</div>		 

		
		
		
		
		
		 <div class="content_bottom">
    		
			<div class="heading">
    		
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				
			</div>
    </div>
		
		
		
		</div>
		
		
		<!-- Body -->
		
		
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
					<a class="border-bottom border-secondary" href="login.php">Sign In</a>
					<a class="border-bottom border-secondary"href="cart.php">View Cart</a>
					<a class="border-bottom border-secondary"href="contact.php">Help</a>
					
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


