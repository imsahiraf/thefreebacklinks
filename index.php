<?php include"header.php";?>
<?php
$data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `blog`"));
?>
<!-- /. SLIDER ENDS
			========================================================================= -->
<!-- PAGE CONTENTS STARTS
			========================================================================= -->
<section class="page-contents">
	<div class="container">
		<div class="row">
			<!-- LEFT COLUMN STARTS
						========================================================================= -->
			<?php include"sidebar.php"?>
			<!-- /. LEFT COLUMN ENDS
						========================================================================= -->
			<!-- RIGHT COLUMN STARTS
						========================================================================= -->
			<div class="col-lg-8">
				<!-- FASHION STARTS
							========================================================================= -->
				<section>
					<div class="row category-caption">
						<div class="col-lg-12">
							<h2 class="pull-left">Blogs</h2>
							<span class="pull-right"><i class="fa fa-plus"></i></span>
						</div>
					</div>
					<div class="row">
						<!-- ARTICLE STARTS -->
						
						<article class="col-lg-12 col-md-12">
							<!-- <div class="picture">
								<div class="category-image">
									<img src="http://placehold.it/800x550" class="img-responsive" alt="">
								</div>
							</div> -->
							<?php
							    $i=0;
							    $q1 = mysqli_query($con,"SELECT * from blog");
							    while($r1 = mysqli_fetch_assoc($q1))
							    {  $i++;
							?>
							<div class="detail col-lg-4 col-md-4">
								<img src="freebacklink/images/h.jpg" style="height: 166px;width: 100%;">
								<h2 class="overlay-category"><a href="standard-post.php?id=<?php echo $r1['id'];?>"><?php echo $r1['title'];?></a></h2>
								<div class="info">
									<span class="date"><i class="fa fa-calendar-o"></i>
										<?php echo $r1['date'];?></span>
									<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
									<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
								</div>
								<div class="author">
									<div class="pic">
										<img src="http://placehold.it/50x50" class="img-circle" alt=""> <span
											class="name"><a href="standard-post.php?id=<?php echo isset($r1['slug'])?$r1['slug']:'';?>">Demo</a></span>
										<span class="read-article pull-right"><a href="standard-post.php?id=<?php echo isset($r1['slug'])?$r1['slug']:'';?>">MORE <i
													class="fa fa-angle-right"></i></a></span>
									</div>
								</div>
							</div>
							<?php  } ?>
						</article>


				</section>
				<!-- /. FASHION ENDS
							========================================================================= -->
				<hr>

				<!-- /. LIFE STYLE ENDS
							========================================================================= -->
			</div>
			<!-- /. RIGHT COLUMN ENDS
						========================================================================= -->
		</div>
	</div>
</section>
<?php include "footer.php";?>