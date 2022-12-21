<?php
include 'header.php';

$db1=new Database();
$myQuery1=$db1->getRow(" Call sp_Service1()");
$db2=new Database();
$myQuery2=$db2->getRow(" Call sp_Service2()");
$db3=new Database();
$myQuery3=$db3->getRow(" Call sp_Service3()");
$db4=new Database();
$myQuery4=$db4->getRow(" Call sp_Service4()");

?>
			<div id="colorlib-main">
				<section class="ftco-section ftco-no-pt ftco-no-pb">
					<div class="container px-md-0">
						<div class="row d-flex no-gutters">
							<div class="col-md-3 pricing">
								<div class="row no-gutters align-items-center">
									<div href="#" class="img w-100 js-fullheight d-flex align-items-center" style="background-image: url(images/<?php echo $myQuery1->img; ?>);">
										<div class="text p-4 ftco-animate">
											<h3><?php echo $myQuery1->main_title; ?></h3>
											<ul>
												<li><span><?php echo $myQuery1->title_1; ?></span><?php echo $myQuery1->text_1; ?></li>
												<li><span><?php echo $myQuery1->title_2; ?></span><?php echo $myQuery1->text_2; ?></li>
												<li><span><?php echo $myQuery1->title_3; ?></span><?php echo $myQuery1->text_3; ?></li>
												<li><span><?php echo $myQuery1->title_4; ?></span><?php echo $myQuery1->text_4; ?></li>
												<li><span><?php echo $myQuery1->title_5; ?></span><?php echo $myQuery1->text_5; ?></li>
											</ul>
											<p><a href="contact.php" class="btn-custom-services">İLETİŞİM'E GEÇ</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pricing">
								<div class="row no-gutters align-items-center">
									<div href="#" class="img w-100 js-fullheight d-flex align-items-center" style="background-image: url(images/<?php echo $myQuery2->img; ?>);">
										<div class="text p-4 ftco-animate">
											<h3><?php echo $myQuery2->main_title; ?></h3>
											<ul>
											<li><span><?php echo $myQuery2->title_1; ?></span><?php echo $myQuery2->text_1; ?></li>
												<li><span><?php echo $myQuery2->title_2; ?></span><?php echo $myQuery2->text_2; ?></li>
												<li><span><?php echo $myQuery2->title_3; ?></span><?php echo $myQuery2->text_3; ?></li>
												<li><span><?php echo $myQuery2->title_4; ?></span><?php echo $myQuery2->text_4; ?></li>
												<li><span><?php echo $myQuery2->title_5; ?></span><?php echo $myQuery2->text_5; ?></li>
											</ul>																				
											<p><a href="contact.php" class="btn-custom-services">İLETİŞİM'E GEÇ</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pricing">
								<div class="row no-gutters align-items-center">
									<div href="#" class="img w-100 js-fullheight d-flex align-items-center" style="background-image: url(images/<?php echo $myQuery3->img; ?>);">
										<div class="text p-4 ftco-animate">
											<h3><?php echo $myQuery3->main_title; ?></h3>
											<ul>
											<li><span><?php echo $myQuery3->title_1; ?></span><?php echo $myQuery3->text_1; ?></li>
												<li><span><?php echo $myQuery3->title_2; ?></span><?php echo $myQuery3->text_2; ?></li>
												<li><span><?php echo $myQuery3->title_3; ?></span><?php echo $myQuery3->text_3; ?></li>
												<li><span><?php echo $myQuery3->title_4; ?></span><?php echo $myQuery3->text_4; ?></li>
												<li><span><?php echo $myQuery3->title_5; ?></span><?php echo $myQuery3->text_5; ?></li>
											</ul>
											<p><a href="contact.php" class="btn-custom-services">İLETİŞİM'E GEÇ</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pricing">
								<div class="row no-gutters align-items-center">
									<div href="#" class="img w-100 js-fullheight d-flex align-items-center" style="background-image: url(images/<?php echo $myQuery4->img; ?>);">
										<div class="text p-4 ftco-animate">
											<h3><?php echo $myQuery4->main_title; ?></h3>
											<ul>
											<li><span><?php echo $myQuery4->title_1; ?></span><?php echo $myQuery4->text_1; ?></li>
												<li><span><?php echo $myQuery4->title_2; ?></span><?php echo $myQuery4->text_2; ?></li>
												<li><span><?php echo $myQuery4->title_3; ?></span><?php echo $myQuery4->text_3; ?></li>
												<li><span><?php echo $myQuery4->title_4; ?></span><?php echo $myQuery4->text_4; ?></li>
												<li><span><?php echo $myQuery4->title_5; ?></span><?php echo $myQuery4->text_5; ?></li>
											</ul>
											<p><a href="contact.php	" class="btn-custom-services">İLETİŞİM'E GEÇ</a></p>
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