
<?php  session_start();
include "../admin/universals/sessions.php";
include "../admin/universals/class.php";


if(isset($_GET['payment'])){
	
	$payment=$_GET['payment'];
		
}


if(isset($_POST['onpayment'])){
	
	
echo " <script type='text/javascript'> alert('Payment Successfull !'); </script> ";

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

	
	<style type="text/css">
	
	.on{
		background:green;
		
	}.on{color:darkgrey;}
	.off{
		
		background:darkred;text-color:green;
	} .off{color:darkgrey;}
	
	.on:hover{	background:black; color:white;}
	.off:hover{	background:black; color:white;}
	
	
	
	
	</style>
	
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
		
		<div class="row mt-3">
		<div class="col-sm-9  py-2"> 
		
		<form action="" method="POST">
		
		<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">Full Name</label></div>
			
			<div class="col-sm-6"><input class="form-control" type="text" name="name" required="" placeholder="Enter Full Name"/></div>
			
		</div>
		
		
		<div class="row form-group mb-4">
			<div class="col-sm-3 mt-1 font-weight-bold text-right"><label for="">Card Number</label></div>
			
			<div class="col-sm-6"><input class=" mt-1 form-control" type="text" name="name" required="" placeholder="Enter 16 Digit Number"/></div>
			
			<div class="col-sm-3"> <i  class="fa fa-cc-mastercard fa-3x"></i> <i style="color:red" class="fa fa-cc-visa fa-3x"></i> </div>
			
		</div>
		
		<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">CVV(3 Digits)</label></div>
			
			<div class="col-sm-6"><input class="form-control" type="text" name="name" required="" placeholder="Enter 3  Digit CVV"/></div>
			
		</div>
		
		
		<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">Expire Date</label></div>
			
			<div class="col-sm-6">
            <div class="row">
            	<div class="col-sm-6">
							<select name="month" class="form-control" placeholder="Month"required=""  id="">
							<option  hidden value="">Month</option>
							<option  value="1">01</option>
							<option  value="2">02</option>
							<option  value="3">03</option>
							<option  value="4">04</option>
							<option  value="5">05</option>
							<option  value="6">06</option>
							<option  value="7">07</option>
							<option  value="8">08</option>
							<option  value="9">09</option>
							<option  value="10">10</option>
							<option  value="11">11</option>
							<option  value="12">12</option>
							</select>
				
				</div>
				
				
				
				<div class="col-sm-6">
							<select name="year" class="form-control" required="" placeholder="Year" id="">
							<option hidden value="">Year</option>
							<option value=""></option>
							<option value="21">2021</option>
							<option value="22">2022</option>
							<option value="23">2023</option>
							<option value="24">2024</option>
							<option value="25">2025</option>
							<option value="26">2026</option>
							<option value="27">2027</option>
							</select>
				
				</div>
				
            </div>			
			
			</div>
			
		</div>
		
		
			 <div class="mt-5 text-center "><input name="onpayment" value="Order Now" type="submit"style="color:white;background:red" class="mr-5 font-italic font-weight-bold btn w-25 rounded-circle" /> </div>

		
		
		</form>
		
		
		</div>         
   

                 <div class="col-sm-3  font-weight-bold py-2 mt-2 text-primary"> Total (<small>vat included</small>): $<?php echo $payment;?></div>

		
			
		</div>
		
		
		

	           <div class="mt-4 w-75 text-center "><a href="payments.php?total=<?php echo $payment; ?>" class="mr-5  font-italic font-weight-bold btn btn-info text-dark w-25 rounded">Back</a></div>
		
		
		</div>
		
		
		<!-- Body -->
		
		
	</div>
	
	
	<div class="clearfix py-5 "></div>
	<div class="clearfix py-5 "></div>
	
	
	
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