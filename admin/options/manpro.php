
<?php    


// Delete:


	
	
	

?>


<h3  class="my-4 h3 bg-primary font-weight-bold">All Products  </h3>
<h3 class="text-center font-weight-bold bg-light"><?php Session::show('delpro');  ?></h3>
<h3 class="text-center font-weight-bold bg-light"><?php Session::show('edit'); ?></h3>




<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Product Name </th>
			<th>Image</th>
			<th>Product ID</th>
			<th>Category</th>
			<th>Brand</th>
			<th>Description</th>
			<th>Price ($USD)</th>
			
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	$sel="select * from Products ";
	$run=$db->select($sel);
	while($row=$run->fetch_assoc()){ $cat_id=$row['Cat_id']; $brand_id=$row['Brand_id']; ?>
		
		<tr>
			<td><?php echo $row['pName'];?></td>
			
			<td><img style="width:120px;height:80px" src="options/images/<?php echo $row['Image'];?>" alt="" /></td>
			
			<td><?php echo $row['ID'];?></td>
			
			<td><?php $sel="select* from category where ID='$cat_id' "; $res=$db->select($sel); $result=$res->fetch_assoc();
			echo $result['catName'];?></td>
			
			<td><?php $sel="select* from brands where ID='$brand_id' "; $res=$db->select($sel); $result=$res->fetch_assoc();
			echo $result['bName'];?></td>
			
			<td><?php echo $row['Description'];?></td>
			
			<td>$<?php echo $row['Price'];?></td>
			
			<td class="text-center">
			<a href="index.php?page=options/editpro&id=<?php echo $row['ID'];?>" class=" mr-1 btn btn-info">Edit</a>
			<a href="options/delete.php?proid=<?php echo $row['ID'];?> &image=<?php echo $row['Image'];?> " class=" btn btn-danger">Delete</a>
			
	<?php } ?>
			
			
			</td>
		</tr>
		
		
		
	</tbody>
	
	
</table>



