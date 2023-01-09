<?php
include 'header.php';

$db=new Database();
$myQuery=$db->getRow(" Call sp_Home()");	
?>
	<div id="colorlib-main">
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container px-md-0">
				<div class="row d-flex no-gutters">
					<div class="col-md-12 portfolio-wrap">
						<div class="row no-gutters align-items-center">
						  <img class="deneme col-md-6" src="images/<?php echo $myQuery->img_main; ?>" alt="main-photo" >
							<div class="col-md-6">
								<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc">
											<div class="top">
												<h2>Merhaba</h2><br>
												<h2 style="color:#f3c623;">&nbsp;&nbsp;<?php echo $myQuery->main_title; ?> 'e</h2>
									
											</div>
											<div class="animation_text">
						 					<h2>&nbsp;&nbsp;&nbsp;&nbsp;<span class="typewrite" data-period="2000" data-words='[ " Hoşgeldiniz"]'></span></h2>
                                           </div><br>
                                            <script>
                                            var Text = function(el, toRotate, period) {
                                              this.toRotate = toRotate;
                                              this.el = el;
                                              this.loopNum = 0;
                                              this.period = parseInt(period, 10) || 2000;
                                              this.txt = '';
                                              this.tick();
                                              this.isDeleting = false;
                                            };
                                            
                                            Text.prototype.tick = function() {
                                              var i = this.loopNum % this.toRotate.length;
                                              var fullTxt = this.toRotate[i];
                                            
                                              if (this.isDeleting) {
                                                this.txt = fullTxt.substring(0, this.txt.length - 1);
                                              } else {
                                                this.txt = fullTxt.substring(0, this.txt.length + 1);
                                              }
                                            
                                              this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
                                            
                                              var that = this;
                                              var delta = 200 - Math.random() * 100;
                                            
                                              if (this.isDeleting) { delta /= 2; }
                                            
                                              if (!this.isDeleting && this.txt === fullTxt) {
                                                delta = this.period;
                                                this.isDeleting = true;
                                              } else if (this.isDeleting && this.txt === '') {
                                                this.isDeleting = false;
                                                this.loopNum++;
                                                delta = 500;
                                              }
                                            
                                              setTimeout(function() {
                                                that.tick();
                                              }, delta);
                                            };
                                            
                                            window.onload = function() {
                                              var elements = document.getElementsByClassName('typewrite');
                                              for (var i=0; i<elements.length; i++) {
                                                var toRotate = elements[i].getAttribute('data-words');
                                                var period = elements[i].getAttribute('data-period');
                                                if (toRotate) {
                                                  new Text(elements[i], JSON.parse(toRotate), period);
                                                }
                                              }
                                            };
											</script>						
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 portfolio-wrap">
						<div class="row no-gutters align-items-center">
							<img class="deneme col-md-6 order-md-last" src="images/<?php echo $myQuery->img_content1; ?>" alt="icerik-1-photo" >
							<div class="col-md-6">
								<div class="text pt-5 px-md-5 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc text-md-right">
											<div class="top">
												<h2 class="mb-4"><a href="hakkimizda"><?php echo $myQuery->title_content1; ?></a></h2>
											</div>
											<div class="absolute">
												<p><?php echo $myQuery->text_content1; ?></p>
											</div>
											<p><a href="hakkimizda" class="custom-btn">HAKKIMIZDA'YA GİT</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 portfolio-wrap">
						<div class="row no-gutters align-items-center">
						<img class="deneme col-md-6" src="images/<?php echo $myQuery->img_content2; ?>" alt="icerik-2-photo" >
							<div class="col-md-6">
								<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc">
											<div class="top">
												<h2 class="mb-4"><a href="hizmetlerimiz"><?php echo $myQuery->title_content2; ?></a></h2>
											</div>
											<div class="absolute">
												<p><?php echo $myQuery->text_content2; ?></p>
											</div>
											<p><a href="hizmetlerimiz" class="custom-btn">HİZMETLERİMİZ'E GİT</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 portfolio-wrap">
						<div class="row no-gutters align-items-center">
						<img class="deneme col-md-6 order-md-last" src="images/<?php echo $myQuery->img_content3; ?>" alt="icerik-3-photo" >
							</a>
							<div class="col-md-6">
								<div class="text pt-5 px-md-5 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc text-md-right">
											<div class="top">
												<h2 class="mb-4"><a href="iletisim"><?php echo $myQuery->title_content3; ?></a></h2>
											</div>
											<div class="absolute">
												<p><?php echo $myQuery->text_content3; ?></p>
											</div>
											<p><a href="iletisim" class="custom-btn">İLETİŞİM'E GİT</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 portfolio-wrap">
						<div class="row no-gutters align-items-center">
						<img class="deneme col-md-6" src="images/<?php echo $myQuery->img_content4; ?>" alt="icerik-4-photo" >
							</a>
							<div class="col-md-6">
								<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc">
											<div class="top">
												<h2 class="mb-4"><a href="blog"><?php echo $myQuery->title_content4; ?></a></h2>
											</div>
											<div class="absolute">
												<p><?php echo $myQuery->text_content4; ?></p>
											</div>
											<p><a href="blog" class="custom-btn">BLOG'A GİT</a></p>
										</div>
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