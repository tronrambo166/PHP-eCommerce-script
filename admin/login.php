
<?php  session_start();

include "universals/sessions.php";
include "universals/mysql.php";
include "universals/helps.php";


 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
	
	

	
	
	
	<?php  
	
    // include "database.php"; 
	
	
	if(isset($_POST['login'])){

		
		$email=$_POST['email'];
		$password=$_POST['password'];
		//$password=password_hash($password, PASSWORD_DEFAULT);
		
		$sel="select * from users where Email='$email'";
		$run=$db->select($sel);
		
		$row=$run->fetch_assoc();
		
		//print_r($row);
		
		if($run->num_rows >0){
			
		if($password==$row['Password'] || password_verify( $password,$row['Password'] ) ){
				
				
				if($_POST['remember']==1){
					setcookie('log_email',$email,time()+(86400)*30,'/');
					setcookie('log_password',$password,time()+(86400)*30,'/');
					
				}
				
				
				
				$_SESSION['id']=$row['ID'];
				$_SESSION['name']=$row['Name'];
				$_SESSION['photo']=$row['Photo'];
				$_SESSION['log']="logged in";
				
				setcookie('log','logged',time()+(86400),'/');
				setcookie('name',$row['Name'],time()+(86400),'/');
				setcookie('id',$row['ID'],time()+(86400),'/');
				setcookie('photo',$row['Photo'],time()+(86400),'/');
				
				header('location:index.php'); exit;
			}
			else $_SESSION['p']="Wrong Password";
		}
		else
		$_SESSION['e']="Invalid Email or Password";
		
	}	
	
	
	?>
	
	
	
	    <body class="">
	
	
	
	
	
        <div style="background:teal" id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow border-0 rounded-lg mt-5">
                                    <div class="card-header bg-light"><h3 class="text-center font-weight-light my-4"><b>Online Store (admin panel)</h3></div>
									<div class="text-center text-primary "><b class=" font-italic  " >
                                       <?php  Session::show('reset'); ?> </b> </div>
</div> 
                                    <div class="card-body bg-dark shadow">
									
                                        <form class="" method="post">
                                            <div class="form-group"><label class="small text-light mb-1" for="inputEmailAddress">Email</label>
											
											<input class=" ml-5 px-5 my-2" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address"
											value="<?php  if(isset($_COOKIE['log_email'])) {echo $_COOKIE['log_email']; }?>"  /></div>
											
												<span class="text-danger font-italic">	<?php Session::show('e'); ?></span>

																						
																						
                                            <div class="form-group"><label class=" text-light small mb-1" for="inputPassword">Password</label>
											
											<input class=" ml-4 my-2 px-5" name="password" id="inputPassword" type="password" placeholder="Enter password"
                             				value="<?php  if(isset($_COOKIE['log_password'])) {echo $_COOKIE['log_password']; }?>"			/></div>
											
											<span class="text-danger font-italic"><?php Session::show('p'); ?></span>
                                            
											<div class="form-group">
                                                <div class="custom-control custom-checkbox">
												
												<input class="custom-control-input  text-light" value="1" name="remember" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label text-light
												
												" for="rememberPasswordCheck">Remember password</label></div>
                                            
											 
											</div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-5 mb-0"> 
											<a href="forgot_password.php" class="text">Forgot password ?</a>
											
											<input type="submit"class="btn btn-dark text-light ml-auto font-weight-bold " href="" name="login" value="Login" /></div>
                                        </form>
										
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
