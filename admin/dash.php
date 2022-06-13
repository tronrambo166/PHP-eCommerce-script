
<?php

$sel="select * from users";
$res=$db->select($sel);




?>

 <h1 class=" mt-3 text-center bg-light py-2 h3 ">Welcome to Online Store's Admin Panel</h1>
 <h2 class="h5 mb-5 text-center text-info"><?php if(isset($_SESSION['success'])) { echo $_SESSION['success']; $_SESSION['success']="";} ?></h2>
                       
					   
                           
						   
			
			
						   
                                 
                                