
<?php    


// Delete:


	
	

?>


<h3  class="my-4 h3 bg-primary font-weight-bold">All Brands  </h3>
<h3 class="text-center font-weight-bold bg-light"><?php Session::show('delbrand'); ?></h3>




<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Brand Name </th>
			<th>Brand ID</th>
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	$sel="select * from brands";
	$run=$db->select($sel);
	while($row=$run->fetch_assoc()){  ?>
		
		<tr>
			<td><?php echo $row['bName'];?></td>
			<td><?php echo $row['ID'];?></td>
			
			<td class="text-center">
			<a href="options/delete.php?bid=<?php echo $row['ID'];?>" class="float-right btn btn-danger">Delete</a>
			
	<?php } ?>
			
			
			</td>
		</tr>
		
		
		
	</tbody>
	
	
</table>


