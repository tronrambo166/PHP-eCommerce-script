
<?php  session_start(); 

if(! isset($_COOKIE['log']) && !isset($_SESSION['log']) ){	
	header('location:login.php');
}


include "universals/sessions.php";
include "universals/class.php";

?>


<?php 

// All fucntion callings from the Complete class //








//Add Category";
	
	if(isset($_POST['savecat'])){
		
	$all->category($_POST);
	
	}
	
	////Add Category";";
	
	
	
	
	//Edit Category";
	
	if(isset($_POST['editcat'])){
		
	$all->editcat($_POST);
	
	}
	
	////Edit Category";";
	

	
	
	
	
	
	
//Add Product";
	
	if(isset($_POST['addpro'])){
		
	$all->products($_POST);
	
	}
	
	////Add Product";";
	
	
	
//Edit Product";
	
	if(isset($_POST['editpro'])){
		
	$all->editproduct($_POST);
	
	}
	
	////Edit Product";";
	
	
	
	
	////Add Brand";";
	
	if(isset($_POST['addbrand'])){
	
	$all->addbrand($_POST);
		
}
	
	////Add Brand";";
	
	
	
	
	

			
				
			// Edit  Profile
			

			
	if(isset($_POST['save_profile'])){
		   
     $all->edit_profile($_POST);
	
	
}


			// Edit  Profile

		
		
		
		// Ship Orders
			
			
	if(isset($_GET['min_sl'])){
		
		$min_id=$_GET['min_sl'];
		$max_id=$_GET['max_sl'];
		   
     $all->shiporders($min_id,$max_id);
	
	
}

			//Ship Orders

		
		
			
			
			
			?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
		
		
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="style.css" />
		
		
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

        <?php if(isset($_COOKIE['photo']))$image=  $_COOKIE['photo']; ?>
		<style type="text/css">
		
	.profile {
    background: url(images/<?php echo $image; ?> ) no-repeat;
    width: 226px;
    height: 35px;
    background-size: 50px 40px;
    background-position: center left;
		}

.info{ background:darkblue;}		
		
		</style>
		
		
   </head>
   
   
	
	
	
	
    <body class="" style="background:url(../images/body_bg3.jpg) repeat" >
	
	
	
	
        <nav class="sb-topnav navbar navbar-expand navbar-dark info">
            <a  class=" text-danger ml-2 disabled font-weight-bold">Cpanel / </a> <a class="navbar-brand" href="index.php?page=dash"> Dashboard</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"></button
            ><!-- User's Name-->
           
		   <div class="navbar ml-auto">
		   
		   <h4 class=" profile h5 text-light font-weight-bold font-italic text-right" >Welcome, 
		   <?php list($name)=explode(' ',$_COOKIE['name']); echo $name; ?></h4>
		   
		   
            <!-- Navbar-->
            <ul class="navbar-nav  ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mb-1 fa-2x fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php?page=profile&id=<?php echo $_COOKIE['id'];?>"><b>Profile</b></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><b>Logout</b></a>
                    </div>
                </li>
            </ul>
		   
		   </div>
		   
		   
        </nav>
		
		
			
			
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
					<div class="row">
					<div class="col-3">
					
					<div class="list-group menu  mt-3">
					<a href="" class="list-group-item bg-info text-dark font-weight-bold disabled font-italic ">Site Options</a>
					
					
					
					<a href="index.php?page=options/orders" 
					class="<?php if($_GET['page']=='options/orders') { ?> bg-dark <?php } ?> list-group-item">Orders</a>
					
					
					<a href="#brand" data-toggle="collapse"
					class=" list-group-item">Brands Section</a>
					
					<div id="brand"class="collapse ml-4 <?php if($_GET['page']=='options/addbrand' || $_GET['page']=='options/manbrand') { ?> show <?php } ?> ">
					<a href="index.php?page=options/addbrand" 
					class="<?php if($_GET['page']=='options/addbrand') { ?> bg-dark <?php } ?> list-group-item">Add New Brand</a>
					
					<a href="index.php?page=options/manbrand" 
					class="<?php if($_GET['page']=='options/manbrand') { ?> bg-dark <?php } ?> list-group-item">All Brands</a>
					</div>
					
					
					
					
					<a href="#cat" data-toggle="collapse"
					class=" list-group-item">Categories</a>
					
					<div id="cat"class="collapse ml-4 <?php if($_GET['page']=='options/addcat' || $_GET['page']=='options/mancat') { ?> show <?php } ?> ">
					<a href="index.php?page=options/addcat" 
					class="<?php if($_GET['page']=='options/addcat') { ?> bg-dark <?php } ?> list-group-item">Add a Category</a>
					
					<a href="index.php?page=options/mancat" 
					class="<?php if($_GET['page']=='options/mancat') { ?> bg-dark <?php } ?> list-group-item">Manage Categories</a>
					</div>
					
					
					
					<a href="#pro" data-toggle="collapse"
					class=" list-group-item">Products</a>
					
					<div id="pro"class="collapse ml-4 <?php if($_GET['page']=='options/addpro' || $_GET['page']=='options/manpro') { ?> show <?php } ?> ">
					<a href="index.php?page=options/addpro" 
					class="<?php if($_GET['page']=='options/addpro') { ?> bg-dark <?php } ?> list-group-item">Add a Product</a>
					
					<a href="index.php?page=options/manpro" 
					class="<?php if($_GET['page']=='options/manpro') { ?> bg-dark <?php } ?> list-group-item">Manage Products</a>
					</div>
					
					
					</div>
					
					
					
					
					
					
					
					</div>
					
					
					
					<div class="col-9">
					
				
                       
					   <?php 
					   
					   
					   if(!isset($_GET['page'])) $page='dash';
					   else $page = $_GET['page']; 
					 
					   
					   include $page.'.php';
					   
					  
					   ?>
					   
					   
                        </div>
                    </div>
					</div>
					
					
					
					
					
					
					
					
					
					
					
                </main>
				
				
				
				</div>
				
				<div class="py-5"></div>
				
                <footer class="py-4 bg-light mt-auto  fixed-bottom mt-5">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-dark font-weight-bold m-auto">Copyright &copy; Tottenham 2019, All rights reserved.</div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div></div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

		
		<script type="text/javascript">
		
		$(document).ready(function() {
  $('#summernote').summernote();
});
		
		</script>
		
		<script type="text/javascript">
		
		
		$(document).ready( function () {
			
			$('.menucontainer').click(function(event){
  event.stopPropagation();
});
			
			
    $('#myTable').DataTable();
} );
		
		</script>
		
    </body>
</html>
