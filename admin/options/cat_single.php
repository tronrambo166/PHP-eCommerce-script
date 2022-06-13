<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post - Single Post Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body class="pt-0">


<?php  //For $row
include "oop_class.php";
include "database.php";

$cat=$object->getcat();

     $count=0;

  // For $row2 from table blog

		$sel="select * from blog ";
		
		$res=$connect->query($sel);
		
		
		$id=$_GET['id'];
		


?>










  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info  mb-5">
    <div class="container py-2">
      <a class="navbar-brand text-dark text-uppercase font-weight-bold" style="font-family:cursive; font-size:21px;font-weight:bold" href="#">Its a Demo Blog site with OOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active mx-5">
            <a style="font-family:cursive; font-size:21px;font-weight:bold"  class="nav-link text-dark font-italic" href="home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item mx-5">
            <a style="font-family:cursive; font-size:21px;font-weight:bold"  class="nav-link text-dark font-italic" href="index.php?page=dashboard">Dashboard</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
	  
	  
	<?php  while($category=$cat->fetch_assoc()){ if($id==$category['ID']) { ?>
		<h2 class="my-5 py-1 bg-info w-100 text-center font-italic">Posts under the category: <?php echo $category['Name']; ?></h2>
	
	<?php  } } ?>
		
		
		
		<div class="col-lg-8">
		
		<?php  while($row2=$res->fetch_assoc()){ 
	  
         if($row2['Category_ID']==$id){ $count++;  ?>
		 
		 
        <!-- Title -->
        <h1 class="mt-5 py-3"><?php echo $row2['Name']; ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><?php echo 'Administrator'; ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 1, 2019 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo 'images/'.$row2['Image'];?>" alt="">

        <hr>

        <!-- Post Content -->
               <p class="lead"><?php  echo substr($row2['Content'], 0, 200); ?></p> <a href="single.php?id=<?php echo $row2['ID'];?>" class="btn btn-info"> See More</a>


        <hr>
		
		 <?php }  } if($count==0) { ?> <h2 class="bg-light text-center w-100 my-5 font-weight-bold">This category has no posts to show</h2> <?php } ?>

		
		
		
		
		
        
       
        
		
		<!--  Comments
       
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div>

		
		-->
		
		
		
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
       

        <!-- Categories Widget -->
      
        </div>

      </div>

    </div>
    <!-- /.row -->

  
  <!-- /.container -->

  <div class="clearfix m-5"></div>
  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
