<h3  class="my-4  h3 bg-primary font-weight-bold">Add Categories  </h3>
<div class="text-center bg-success mb-5"><b class="bg-success  " >
<?php Session::show('insert'); ?></b>
</div>


			

			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Category Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="username" placeholder="Enter ID"  /> 
					
					</div>
					
		    	</div>
				
				
				
				
				
				
				
				<input type="submit" name="savecat" value="Save" class="px-3 py-2 btn btn-secondary  font-italic" />
				
		    </form>
			
			
			
							<div class="clearfix" style="min-height:140px"></div>
