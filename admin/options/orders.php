


<h3  class="  mt-3 h3 text-success bg-dark text-center font-weight-bold">All Orders  </h3>
<h3 class="mb-5 text-center font-weight-bold bg-light"><?php Session::show('shipped');  ?></h3>




<table class="display table table-bordered " id="">
	<thead>
		<tr class="bg-danger">
			<th>Customer Name </th>
			<th>Product ID</th>
			<th>Quantity </th>
			<th>Price</th>
			<th>Total</th>
			
			
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  $select="select * from orders where ID='1' "; $result=$db->select($select)->fetch_assoc(); $first_id=$result['Cus_id'];
	
	$sel="select orders.*,visitors.Name from orders,visitors where orders.Cus_id=visitors.ID"; $order=$db->select($sel); 
	$c=0; $total=0; $rows=$order->num_rows; $max_sl=0; $min_sl=1;
	
	
	while($row=$order->fetch_assoc()){ $c++;  

	if($first_id !=$row['Cus_id']) {   $min_sl=$row['SL'];	$total=0;	$first_id =$row['Cus_id'];   ?>
	<div class="mt-5 bordered"></div><thead >
		<tr class="mt-5 bg-danger">
			<th>Customer Name </th>
			<th>Product ID</th>
			<th>Quantity </th>
			<th>Price</th>
			<th>Total</th>
			
			
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	  <?php  }  $check_id=$row['SL']+1; $next_id="select * from orders where SL='$check_id'"; $fetch=$db->select($next_id)->fetch_assoc();?>
		
	
		
		<tr>
			
			
			<td><?php echo $row['Name'];?></td>
			
			
			<td><?php echo $row['Pro_id'];?></td>
			
			<td>$<?php echo $row['Quantity'];?></td>
			<td>$<?php echo $row['Price']*$row['Quantity']; $price=$row['Price']*$row['Quantity']; ?></td>
			
			<?php if($first_id ==$row['Cus_id']) { $total=$total+$price; }?>
			
			
			
			<?php if((isset($fetch['Cus_id']) && $fetch['Cus_id']!=$first_id) || $c==$rows ) { ?>	
			<td>$<?php echo $total; ?></td>
		<?php }  ?>
			
			
			<td class=" text-center">
			
			
			
		<?php if((isset($fetch['Cus_id']) && $fetch['Cus_id']!=$first_id) || $c==$rows ) {  $max_sl=$row['SL'];
		if($row['Status']==0) { ?>	
		<a href="index.php?min_sl=<?php echo $min_sl;?> &max_sl=<?php echo $max_sl;?> " class=" btn btn-dark">Ship All</a>
		
		
		<?php } else  { ?>
	<a href="" disabled class="disabled btn btn-dark">Shipped</a>     <?php } } }?>
			
			
			</td>
		</tr>
		
		
		
	</tbody>
	
	
</table>



