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
								<div class="col-lg-6 col-lg-offset-3"><input name="title" type="text" placeholder="Title"></div>
								<div class="col-lg-6 col-lg-offset-3"><textarea name="description" type="text" placeholder="Post a Blog here with your link"></textarea></div>
								<div class="col-lg-6 col-lg-offset-3"><button type="submit" name="add" value="add">Add Backlink</button></div>
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
if(isset($_POST['add'])){
        $title=$_POST["title"];
        $description=$_POST['description'];
        if($con->query("insert into blog(`title`,`description`)values('".$title."','".$description."')")){
        echo '<script>alert("Your backlink has been added!");document.location="index.php"</script>';
        } else {
            echo '<script>alert("Something went wrong");document.location="postblog.php"</script>';
        }
}


?>
		<!-- /. PAGE CONTENTS ENDS
			========================================================================= -->
<?php include"footer.php";?>