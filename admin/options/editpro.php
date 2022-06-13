 
 <h1 class="text-center bg-light my-5">Edit Informations</h1>
 
 
 
 <?php   

	
 if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	
	
	//$up=" delete from category where ID='$id' ";
	
	$sel="select * from products where ID='$id'";
	$run=$db->select($sel);
	$row2=$run->fetch_assoc();
	
	
	
	
	
	
}




 
 ?>
 
 
 
 
 
 
			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Product Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name" value="<?php echo $row2['pName'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Product ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="username" placeholder="Enter ID" value="<?php echo $row2['ID'];?>" readonly /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Category</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <select name="cat_id" class="form-control form-group" id=""><option value="">Select a Category</option>
					 
					  <?php  
		                $sel="select * from category";
		                $res=$db->select($sel);


		         while($row=$res->fetch_assoc() ) {		if($row['ID']==$row2['Cat_id']) {			 ?>
		  
		        
                 <option selected hidden value="<?php   echo $row['ID']; ?>"> <?php   echo $row['catName']; ?></option>	 <?php   } ?>	
                
				<option value="<?php   echo $row['ID']; ?>"> <?php   echo $row['catName']; ?></option>		
		         <?php   } ?>
					 
					 
					 </select>					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Brand</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <select name="brand_id" class="form-control form-group" id=""><option value="">Select a Brand</option>
					 
					  <?php  
		                $sel="select * from brands";
		                $res=$db->select($sel);


		         while($row=$res->fetch_assoc() ) {		if($row['ID']==$row2['Brand_id']) {			 ?>
		  
		        
                 <option selected hidden value="<?php   echo $row['ID']; ?>"> <?php   echo $row['bName']; ?></option>	 <?php   } ?>	
                
				<option value="<?php   echo $row['ID']; ?>"> <?php   echo $row['bName']; ?></option>		
		         <?php   } ?>
					 
					 
					 </select>					
					</div>
					
		    	</div>
				
				
				
					<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Descrip -tion</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <textarea name="description" id="" cols="50" rows="3" value=""><?php echo $row2['Description']; ?></textarea>			
					</div>
					
		    	</div>
				
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Price</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group " type="text" name="price" id="username"  value="<?php echo $row2['Price']; ?>"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Image</strong></label></div>
					
		    		<div class="col-sm-7"> <img style="width:120px;height:80px" src="options/images/<?php echo $row2['Image']; ?>" alt="" /> 
                   Change: <input type="file" name="file" />					
					</div>
					
		    	</div>
				
				
				
				
				<input type="submit" name="editpro" value="S a v e" class=" mt-4 w-100   mx-auto px-3 py-2 btn btn-primary  " />
				
		    </form>