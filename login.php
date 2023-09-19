<?php include"header.php";?>
		<!-- PAGE CONTENTS STARTS
			========================================================================= -->
		<section class="inner-page-contents">
			<div class="container">
				<div class="row">
					<!-- LEFT COLUMN STARTS
						========================================================================= -->
					<div class="col-lg-12">
						<!-- FOOD STARTS
							========================================================================= -->
						<section>
							<div class="row category-caption">
								<div class="col-lg-12">
									<h2>LOGIN</h2>
								</div>
							</div>
							<form method="POST">
							<div class="row login-form">
								<div class="col-lg-6 col-lg-offset-3"><input name="user" type="email" placeholder="Email"></div>
								<div class="col-lg-6 col-lg-offset-3"><input name="password" type="password" placeholder="Password"></div>
								<!-- <div class="col-lg-6 col-lg-offset-3"><input name="" type="checkbox" value=""> Remember me</div> -->
								<div class="col-lg-6 col-lg-offset-3"><button name="login" type="submit" value="LOGIN">Login</button></div>
								<!-- <div class="col-lg-6 col-lg-offset-3"><a href="#">Lost you password?</a></div> -->
							</div>
							</form>
						</section>
						<!-- /. FOOD ENDS
							========================================================================= -->
					</div>
					<!-- /. LEFT COLUMN ENDS
						========================================================================= --> 
					<!-- RIGHT COLUMN STARTS
						========================================================================= -->
					
					<!-- /. RIGHT COLUMN ENDS
						========================================================================= --> 
				</div>
			</div>
		</section>
		<!-- /. PAGE CONTENTS ENDS
			========================================================================= -->
<?php include"footer.php"?>
<?php
 if(isset($_POST['login']))
{
    $user = $_POST['user'];
    $password = $_POST['password'];

    $query = $con->query("SELECT * from login where user = '$user' AND password='$password' ");
    $count= mysqli_num_rows($query);
    if($count == 1)
    {
       $row= mysqli_fetch_assoc($query);
       $_SESSION['loggedin']  = $row['id'];
       $_SESSION['ausername'] = $row['user'];

      
       $_SESSION['success']="Login Successfull!";
         echo '<script>document.location="index.php"</script>';
         exit();
    }
     else{
         $_SESSION['not']="Login Failed!";
         echo '<script>document.location="login.php"</script>';
         exit();
     }
 }     
?>