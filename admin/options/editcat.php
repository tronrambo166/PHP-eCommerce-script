 
 <h1 class="text-center bg-light my-5">Edit Informations</h1>
 
 
 
 <?php   

	
 if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	
	
	//$up=" delete from category where ID='$id' ";
	
	$sel="select * from category where ID='$id'";
	$run=$db->select($sel);
	$row=$run->fetch_assoc();
	
	
	//$_SESSION['del']="Deleted Successfully !";
	
}




 
 ?>
 
 
 
 
 
 
 
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Category Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" value="<?php echo $row['catName'];?>" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group " readonly type="text" name="id" value="<?php echo $row['ID'];?>" id="username" placeholder="Enter ID"  /> 
					* you cannot change ID.
					</div>
					
		    	</div>
				
				
				
				
				
				
				
				
				
				
				
				<div class="clearfix"></div>
				
				<input type="submit" name="editcat" value="Save" class="px-3 py-2 btn btn-secondary  font-italic" />
				
		    </form>