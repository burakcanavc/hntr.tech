
<?php include 'header.php'; ?>
	<div id="colorlib-main">
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container px-md-0">
				<div class="row d-flex no-gutters">
					<div class="col-md-12 portfolio-wrap">
						<div class="row no-gutters align-items-center">
						  <img class="deneme col-md-6" src="images/main.jpg" alt="main-photo" >
							<div class="col-md-6">
								<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc">
											<div class="top">
												<h2>Merhaba</h2><br>
												<h2 style="color:#f3c623;">&nbsp;&nbsp;hntr.tech 'e</h2>
									
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
							<img class="deneme col-md-6 order-md-last" src="images/icerik-1.jpg" alt="icerik-1-photo" >
							<div class="col-md-6">
								<div class="text pt-5 px-md-5 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc text-md-right">
											<div class="top">
												<h2 class="mb-4"><a href="about.php">Hakkımızda</a></h2>
											</div>
											<div class="absolute">
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<p><a href="about.php" class="custom-btn">HAKKIMIZDA'YA GİT</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 portfolio-wrap">
						<div class="row no-gutters align-items-center">
						<img class="deneme col-md-6" src="images/icerik-2.jpg" alt="icerik-2-photo" >
							<div class="col-md-6">
								<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc">
											<div class="top">
												<h2 class="mb-4"><a href="services.php">Hizmetlerimiz</a></h2>
											</div>
											<div class="absolute">
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<p><a href="services.php" class="custom-btn">HİZMETLERİMİZ'E GİT</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 portfolio-wrap">
						<div class="row no-gutters align-items-center">
						<img class="deneme col-md-6 order-md-last" src="images/icerik-3.jpg" alt="icerik-3-photo" >
							</a>
							<div class="col-md-6">
								<div class="text pt-5 px-md-5 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc text-md-right">
											<div class="top">
												<h2 class="mb-4"><a href="contact.php">İletişim</a></h2>
											</div>
											<div class="absolute">
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<p><a href="contact.php" class="custom-btn">İLETİŞİM'E GİT</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 portfolio-wrap">
						<div class="row no-gutters align-items-center">
						<img class="deneme col-md-6" src="images/icerik-4.jpg" alt="icerik-4-photo" >
							</a>
							<div class="col-md-6">
								<div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
									<div class="px-4 px-lg-4">
										<div class="desc">
											<div class="top">
												<h2 class="mb-4"><a href="blog.php">Blog</a></h2>
											</div>
											<div class="absolute">
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<p><a href="blog.php" class="custom-btn">BLOG'A GİT</a></p>
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