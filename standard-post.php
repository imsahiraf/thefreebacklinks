<?php include"header.php";?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `blog` WHERE `id` = '$id'"));

    }
?>
		<!-- /. NAVIGATION ENDS
			========================================================================= -->
		<!-- PAGE CONTENTS STARTS
			========================================================================= -->
		<section class="inner-page-contents">
			<div class="container">
				<div class="row">
					<!-- LEFT COLUMN STARTS
						========================================================================= -->
					<div class="col-lg-8">
						<!-- FASHION STARTS
							========================================================================= -->
						<section>
								<!-- <div class="row category-caption">
									<div class="col-lg-12">
										<h2 class="pull-left main-caption"><a href="category-fashion.html">FASHION</a></h2>
										<h2 class="pull-left sub-cat">CATWALK 2014</h2>
									</div>
								</div> -->
							<div class="row">
								<article class="col-lg-12 col-md-12">
									<!-- <div class="picture">
										<div class="category-image">
											<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
											<h2 class="overlay-category"></h2>
										</div>
									</div> -->
									<div class="detail">
										<div class="info">
											<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>                        
											<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
											<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
										</div>
										<div class="caption"><?php echo  isset($data['title'])?$data['title']:'';?></div>
										<div class="author">
											<div class="pic">
												<img src="http://placehold.it/50x50" class="img-circle" alt="" > <span class="name"><a href="#">JOHN DOE</a></span> 												
											</div>
										</div>
									</div>
									<div class="description">
									<?php echo  isset($data['description'])?$data['description']:'';?><div class="desc-padding">
											<!-- <img src="http://placehold.it/280x400" class="pull-left" alt="">
										<div class="desc-padding">
											<img src="http://placehold.it/280x400" class="pull-right" alt="" >Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. <br><br>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. <br><br>Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis.
										</div> -->
									</div>
									<div class="clearfix"></div>
									<hr>
									<hr>
									<!-- Share this post starts -->
									<div class="sharepost">
										<ul>
											<li>SHARE THIS POST</li>
											<li class="facebook">
												<div class="icon"><a href="#"><i class="fa fa-facebook"></i></a></div>
											</li>
											<li class="twitter">
												<div class="icon"><a href="#"><i class="fa fa-twitter"></i></a></div>
											</li>
											<li class="linkedin">
												<div class="icon"><a href="#"><i class="fa fa-linkedin"></i></a></div>
											</li>
											<li class="dribbble">
												<div class="icon"><a href="#"><i class="fa fa-dribbble"></i></a></div>
											</li>
											<li class="facebook">
												<div class="icon"><a href="#"><i class="fa fa-facebook"></i></a></div>
											</li>
											<li class="twitter">
												<div class="icon"><a href="#"><i class="fa fa-twitter"></i></a></div>
											</li>
											<li class="linkedin">
												<div class="icon"><a href="#"><i class="fa fa-linkedin"></i></a></div>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<!-- Share this post ends -->
									<hr>            
									<hr>             
									<hr>
									<!-- Related Articles Ends -->
									<hr>
									<!-- Comment Starts -->
									
									<!-- Leave a Comment Ends -->
								</article>
							</div>
						</section>
						<!-- /. FASHION ENDS
							========================================================================= -->
					</div>
					<!-- /. LEFT COLUMN ENDS
						========================================================================= --> 
					<!-- RIGHT COLUMN STARTS
						========================================================================= -->
					<?php include"sidebar.php"?>
					<!-- /. RIGHT COLUMN ENDS
						========================================================================= --> 
				</div>
			</div>
		</section>
		<!-- /. PAGE CONTENTS ENDS
			========================================================================= -->
<?php include"footer.php";?>