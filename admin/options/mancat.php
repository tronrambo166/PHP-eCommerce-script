
<?php    


// Delete:


?>


<h3  class="my-4 h3 bg-primary font-weight-bold">All Categories  </h3>
<h3 class="text-center font-weight-bold bg-light"><?php Session::show('del'); ?></h3>




<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Category Name </th>
			<th>ID</th>
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	$sel="select * from category";
	$run=$db->select($sel);
	while($row=$run->fetch_assoc()){  ?>
		
		<tr>
			<td><?php echo $row['catName'];?></td>
			<td><?php echo $row['ID'];?></td>
			
			<td class="text-center">
			<a href="index.php?page=options/editcat&id=<?php echo $row['ID'];?>" class="float-left  btn btn-info">Edit</a>
			<a href="options/delete.php?cid=<?php echo $row['ID'];?>" class="float-right btn btn-danger">Delete</a>
			
	<?php } ?>
			
			
			</td>
		</tr>
		
		
		
	</tbody>
	
	
</table>


