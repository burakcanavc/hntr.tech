
<?php
require 'header.php';

/* Veritabanı tablo çağırma işlemi */
$db=new Database();
$myQuery=$db->getRow("SELECT * FROM tbl_blog WHERE id=62");
$myQuery1=$db->getRow("Call sp_About()");
/* İşlem sonu */

/* Mesaj gönderme işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['comment_submit'])){
	
	$isim = security("isim");
  
	$mail = security("mail");
  
	$yazi = security("yazi");
  
	$insert=$db->Insert('INSERT INTO `tbl_comments` SET name=?, mail=?, text=?',array($isim,$mail,$yazi));
  
	if($insert){
	
	  $mesajBasarili="Mesajınız başarılı şekilde gönderilmiştir. Birazdan sayfa otomatik olarak yenilenecektir.";
	  echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/blog-content.php">';
  
	 }
	
	}/* İşlem sonu */

?>
			<div id="colorlib-main">
				<section class="ftco-section ftco-no-pt ftco-no-pb">
					<div class="container px-md-0">
						<div class="row d-flex no-gutters">
							<div class="col-lg-12 pb-5 single">
								<div class="row">
                                  <div class="img img-blog w-100" style="background-image: url(images/<?php echo $myQuery->img; ?>);"></div>
									<div class="px-5 mt-4">
										<h1 class="mb-3"><?php echo $myQuery->title; ?></h1>
										<div style="color:#FFF;"><?php echo $myQuery->text; ?></div>
										<div class="tag-widget post-tag-container mb-5 mt-5">
											<div class="tagcloud">
												<a href="blog-content.php" class="tag-cloud-link"><?= $myQuery->tag1; ?></a>
												<a href="blog-content.php" class="tag-cloud-link"><?= $myQuery->tag2; ?></a>
												<a href="blog-content.php" class="tag-cloud-link"><?= $myQuery->tag3; ?></a>
											</div>
										</div>
										
										<div class="about-author d-flex p-4">
											<div class="bio mr-5">
												<img src="images/<?php echo $myQuery1->team_img; ?>" alt="Image placeholder" class="img-fluid mb-4">
											</div>
											<div class="desc">
												<h3><?php echo $myQuery1->team_name; ?></h3>
												<p><?php echo $myQuery1->team_dpt; ?></p>
											</div>
										</div>


										<div class="pt-5 mt-5">
											<h3 class="mb-5 font-weight-bold">Yorumlar</h3>
											<ul class="comment-list">

												<li class="comment">
													
													<div class="comment-body">
														<h3>Burakcan Avcı (Klon olan)</h3>
														<div class="meta">29 Aralık 2022 20:35</div>
														<p>Html'i öğrenmek kolaydır. Website yapmak isteyen herkesin bilmesi gereklidir.</p>
														
													</div>
												</li>

											
											</ul>
											<!-- END comment-list -->
											
											<div class="comment-form-wrap col-md-12 pt-5">
												<h3 class="mb-5">Yorum Yaz</h3>
												<form method="POST" class="p-3 p-md-5">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label for="name">İsim Soyisim *</label>
																<input type="text" name="isim" class="form-control" id="name">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="email">Email *</label>
																<input type="email" name="mail" class="form-control" id="email">
															</div>
														</div>
													
														<div class="col-md-12">
															<div class="form-group">
																<label for="message">Yorum</label>
																<textarea name="yazi" id="message" cols="20" rows="5" class="form-control"></textarea>
															</div>
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<input type="submit" name="comment_submit" value="Paylaş" class="btn py-3 px-4 btn-primary">
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div><!-- END-->
							</div>
						</div>
					</div>
				</section>
			</div><!-- END COLORLIB-MAIN -->
		</div><!-- END COLORLIB-PAGE -->

		<?php include 'footer.php'; ?>