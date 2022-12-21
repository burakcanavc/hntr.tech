
<?php

require 'header.php'; 

$db=new Database();
$myQuery=$db->getRow("Call sp_About()");
?>
			<div id="colorlib-main">
				<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
					<div class="container-fluid px-0">
						<div class="row d-flex">
							<div class="col-md-6 d-flex">
								<img class="deneme img d-flex align-self-stretch align-items-center " src="images/<?php echo $myQuery->img; ?>" alt="about-photo">
							</div>
							<div class="col-md-6 d-flex align-items-center">
								<div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate">
									<h2 class="mb-4"><span><?php echo $myQuery->title; ?></span></h2>
									<p>  <?php echo $myQuery->text; ?>  </p>
									<div class="team-wrap row mt-4">
										<div class="col-md-4 team">
											<div class="img" style="background-image: url(images/<?php echo $myQuery->team_img; ?>);"></div>
											<h3><?php echo $myQuery->team_name; ?></h3>
											<span></span><?php echo $myQuery->team_dpt; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div><!-- END COLORLIB-MAIN -->
		</div><!-- END COLORLIB-PAGE -->

		<?php include 'footer.php'; ?>