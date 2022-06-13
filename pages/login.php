
<?php session_start();
include "../admin/universals/sessions.php";
include "../admin/universals/class.php";


if(isset($_POST['register'])){
	
		$all->registration($_POST);
}


if(isset($_POST['login'])){
	
		$all->login($_POST);
}






?>



<!DOCTYPE HTML> 
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="../menu_footer.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />

	<style type="text/css">
	
	.reg .col-sm-3 {
		
		color:darkred;
	}
	
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
		
		<span style="margin-top: -5px; display: block" class="text-danger"><?php if(isset($_SESSION['cart_no'])) {echo  $_SESSION['cart_no']; } else echo "0"; ?></span></a></span>
		
		</div>			
		
		</div>
		
		
		
		<div class="col-sm-4">
		
		<?php if(! isset($_SESSION['login'])) { ?>
		
		<a href="login.php" class="btn btn-dark m-3  w-75">Login </a>
		<h4 class=" h6 text-danger text-center"><?php echo Session::show('logout');?></h4>
		
		<?php  }  else {?>
		<a href="logout.php" class="btn btn-dark m-3  w-75">Logout </a>
		<h4 class=" w-100 profile h6 my-0 text-success font-weight-bold font-italic text-center" >Welcome, 
		   <?php list($name)=explode(' ',$_COOKIE['log_name']); echo $name; ?></h4>
		  
		  <a class="w-100 my-0 d-inline-block text-center" href="profile.php?id=<?php echo $_COOKIE['log_id'];?>"><b>Profile</b></a>

		  
		<h4 class=" h6 text-success text-center"><?php echo Session::show('login');?></h4>
		
		
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
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="contact.php" class="text-light nav-link">CONTACT</a></li>
				</ul>
			</div>
		
		
		
		<?php exit; }  ?>
		
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
					<li class="nav-item py-1 px-3 bg-dark border-right"><a href="contact.php" class="text-light nav-link">CONTACT</a></li>
				</ul>
			</div>
			
			
			
		</div>
		</div>
		
		<!-- Menu -->
		
		
		
		
		<!-- Body -->
		
		<div class="container">
		
		
		<div class="row">
			<div class="col-sm-4">  
							<h3 class="font-arial bg-primary  text-dark font-italic font-weight-bold">already a member? <b>Login</b></h3>

			
			  <form class="" method="post">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress"><b>Email</b></label>
											
											<input class="  pr-3 pl-5 my-2" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address"
					value="<?php if(isset($_SESSION['log_email_visitor'])) echo $_SESSION['log_email_visitor']; elseif(isset($_COOKIE['log_email_visitor'])) {echo $_COOKIE['log_email_visitor']; } ?> "  /></div>
											
		                  <span class="text-danger font-italic">	<?php Session::show('e');  ?></span>

																						
																						
                                            <div class="form-group"><label class="small mb-1" for="inputPassword"><b>Password</b></label>
											
											<input class="  my-2 pr-3 pl-5" name="password" id="inputPassword" type="password" placeholder="Enter password"
                             				value="<?php  if(isset($_COOKIE['log_password_visitor'])) {echo $_COOKIE['log_password_visitor']; }?>"			/></div>
											
											<span class="text-danger font-italic"><?php  Session::show('p');?></span>
                                            
											<div class="form-group">
                                                <div class="custom-control custom-checkbox">
												
												<input class="custom-control-input" value="1" name="remember" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                            
											
											</div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="forgot_password.php">Forgot Password?</a>
											
											<input type="submit"class="btn btn-dark text-light mr-4" href="" name="login" value="Login" /></div>
                                        </form>
			
			</div>
			
			<div class="col-sm-1"></div>
			
			
			
			
			
			
			
			
			
			<div class="col-sm-7">
			
           
			<div>
				<h3 class="font-arial bg-primary text-center font-italic text-dark font-weight-bold"><b>Registration Form</b></h3>
				
				
<div class="text-center bg-success mb-5"><b class="bg-success font-italic " >

<?php Session::show('register');  ?></b>

</div>	

		</div>
			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" class="reg" enctype="multipart/form-data">
			
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					
					</div>
					<div class="col-sm-3"> <?php Session::show('name_err');?></div>

					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="C"><strong>Country</strong></label></div>
					
		    		<div class="col-sm-7"> 
                   <select name="country" id="C" class="form-control">  
					 <option value="NULL">Select a Country</option>
					 <option value="Bangladesh">Bangladesh</option>
					 <option value="India">India</option>
					 <option value="England">England </option>
					 <option value="Iceland">Iceland</option>
					 <option value="Bermuda">Bermuda</option>
					 
					 
					 </select>
					</div>
					
						<div class="col-sm-3"> <?php Session::show('country');?></div>
				
		    	</div>
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="address"><strong>Addres</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="address" id="address" placeholder="Write your address here"  /> 

					</div>
					
						<div class="col-sm-3"> <?php Session::show('address');?></div>
				
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Email</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="email" id="email" placeholder="Enter Name"  /> 

					</div>
					
						<div class="col-sm-3"> <?php Session::show('email');?></div>
				
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="password"><strong>Password</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="password" name="password" id="password" placeholder="Enter Password" /> 

					
					</div>
					
					<div class="col-sm-3"> <?php Session::show('password');?></div>
					
		    	</div>
				
				
				
		
				
				
				
			<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>Phone</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="phone" id="phone" placeholder="Enter Phone (Optional)"  /> 

					</div>
					
						<div class="col-sm-3"> <?php Session::show('phone');?></div>
				
		    	</div>
				
				<div class="clearfix"></div>
				
				<div class="row">
					<div class="col-sm-6"></div>
				<input type="submit" name="register" value="Register" class="mb-4 mt-3 px-3 py-2 btn btn-dark  font-weight-bold font-italic" />
				</div>
				
		    </form>
					

		
			
			</div>
		
		
		</div>
		
		
		
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