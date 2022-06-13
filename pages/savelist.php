
<?php   session_start(); 
include "../admin/universals/sessions.php";
include "../admin/universals/class.php";








if(isset($_POST['update'])){
	
	$cart_id=$_GET['pro_id'];
	
	$quantity=$_POST['new_quantity'];
	
	$up="update cart set Quantity='$quantity' where Cart_id= '$cart_id' ";
	$res=$db->update($up);
	if($res===true) $_SESSION['update']='Quantity Updated';
}



if(isset($_GET['id'])){
	
	$list_id=$_GET['id'];
	
	$del="delete from savelist where ID= '$list_id' ";
	$res=$db->update($del);
	if($res===true) { $_SESSION['del']='Item removed from the list';   }
}



if(isset($_SESSION['log_id'])) { $id=$_SESSION['log_id'];

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
		
		
		<div class="content">
    	<div class="cartoption">		
			<div class="cartpage">    
	<h2 class="w-100 "> Saved Products <small class="ml-5 text-success bg-light"><?php Session::show('del'); Session::show('cancel');
          	Session::show('update'); Session::show('addcart'); Session::show('order');  Session::show('duplicate'); ?></small>
	          </h2> 
			
						<table class="tblone">
							<tr>
								<th width="10%">SL No.</th>
								<th width="20%">Product Name</th>
								<th width="20%">Image</th>
								<th width="10%">Quantity</th>
								<th width="16%">Price</th>
								<th width="24%">Action</th>
							</tr>
							
							<?php   if(isset($_SESSION['log_id'])){
								$sel="select * from savelist where Cus_id='$id'"; $res=$db->select($sel); $tot=0; $c=0; $tot_q=0;
				
				           if($res->num_rows> 0){  while($row=$res->fetch_assoc() ) {  							 ?>
							 
							<tr> <?php  if($res->num_rows== 0) ?>
								<td><?php echo ++$c;  ?></td>
								<td><?php echo $row['Pro_name'];  ?></td>
								<td><img src="../admin/options/images/<?php echo $row['Image'];  ?>" alt=""/></td>
								<td><?php echo $row['Quantity'];  ?></td>
								<td>$<?php echo $row['Price'];  ?></td>
								
                <td> <?php if($row['Status']==0){ ?>
				<a href="details.php?quantity=<?php echo $row['Quantity']; ?>&id=<?php echo $row['Pro_id']; ?>"
				class="btn btn-info text-dark font-weight-bold">Add to cart</a>  <?php } else { ?>
				
				<a href="" class="disabled btn btn-info text-dark font-weight-bold">Added to cart</a>  <?php } ?>
				
				<a onclick="return confirm('Remove from savelist ?');"href="savelist.php?id=<?php echo $row['ID'];  ?>">X</a></td>
							</tr>
							
							
							 <?php   } $_SESSION['q']=$tot_q;  $_SESSION['cart_no']=$c;} 
							else echo "<tr><h3 class='text-center text-success'>Savelist is empty !</h3></tr>";  }

                           		else echo "<tr><h3 class='text-center text-success'>Savelist is empty !</h3></tr>";		?>
							
						</table>
						
						
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="products.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						
						
					</div>
    	</div>  	
       <div class="clear"></div>
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
	
	
	<script type="text/javascript">
	
	function cart(){
		
		alert('Your Cart is Empty !');
	}
	
	function login(){
		
		alert('You must login in order to payment !');
	}
	
	</script>
	
</body>
</html>