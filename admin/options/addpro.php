<h3  class="my-4  h3 bg-primary font-weight-bold">Add Products  </h3>
<div class="text-center bg-success mb-5"><b class="bg-success  " >
<?php Session::show('pro'); ?></b>
</div>


			

			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Product Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					
					</div>
					<div class="col-sm-4">New Product <input name="new" type="checkbox" value="1"/></div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Product ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="username" placeholder="Enter ID"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Category</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <select name="cat_id" class="form-control form-group" id=""><option value="">Select a Category</option>
					 
					  <?php  
		                $sel="select * from category";
		                $res=$db->select($sel);


		         while($row=$res->fetch_assoc() ) { ?>
		  
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


		         while($row=$res->fetch_assoc() ) { ?>
		  
                 <option value="<?php   echo $row['ID']; ?>"> <?php   echo $row['bName']; ?></option>		
		         <?php   } ?>
					 
					 
					 </select>					
					</div>
					
		    	</div>
				
				
				
					<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Descrip -tion</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <textarea name="description" id="" cols="50" rows="3"></textarea>			
					</div>
					
		    	</div>
				
				
				
				
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Price</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group " type="text" name="price" id="username" placeholder="$USD"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Image</strong></label></div>
					
		    		<div class="col-sm-7"> 
                   <input type="file" name="file" />					
					</div>
					
		    	</div>
				
				
				
				
				<input type="submit" name="addpro" value="Add" class=" w-25 m-auto px-3 py-2 btn btn-dark  font-italic" />
				
		    </form>
			
			
			
							<div class="clearfix" style="min-height:140px"></div>
