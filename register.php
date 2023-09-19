<?php include "header.php"; ?>
		<!-- /. NAVIGATION ENDS
			========================================================================= -->
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
									<h2>REGISTER</h2>
								</div>
							</div>
							<form method="POST">
							<div class="row login-form">
								<div class="col-lg-6 col-lg-offset-3"><input name="user" type="email" placeholder="Email"></div>
								<div class="col-lg-6 col-lg-offset-3"><input name="password" type="password" placeholder="Password"></div>
								<div class="col-lg-6 col-lg-offset-3"><button type="submit" name="register" value="REGISTER">Register</button></div>
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
		<?php 
if(isset($_POST['register'])){
        $user=$_POST["user"];
        $password=$_POST['password'];
        if($con->query("insert into login(`user`,`password`)values('".$user."','".$password."')")){
        echo '<script>alert("NOw you can login!");document.location="login.php"</script>';
        } else {
            echo '<script>alert("Admin Not Added");document.location="teams.php"</script>';
        }
}


?>
		<!-- /. PAGE CONTENTS ENDS
			========================================================================= -->
<?php include"footer.php";?>