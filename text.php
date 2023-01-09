
<?php
require 'header.php';
$yazi_id= $_GET['id'];
/* Veritabanı tablo çağırma işlemi */
$db=new Database();
$myQuery=$db->getRow('SELECT * FROM tbl_blog WHERE id=?',array($yazi_id));
$blogDate="$myQuery->date";
$myQuery1=$db->getRow("Call sp_About()");
$blogYorum=$db->TableOperations('SELECT * FROM tbl_comments WHERE text_title="'.$myQuery->title.'"',PDO::FETCH_ASSOC);
/* İşlem sonu */

/* Yorum gönderme işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['comment_submit'])){
	
	$isim = security("isim");
  
	$mail = security("mail");
  
	$yazi = security("yazi");

    $blogYaziBaslik = security("yaziBaslik");
  
	$insert=$db->Insert('INSERT INTO `tbl_comments` SET name=?, mail=?, text=?, text_title=?',array($isim,$mail,$yazi,$blogYaziBaslik));
  
	if($insert){

	  echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/yazi-'.$yazi_id.'">';
  
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
										<h3 class="mb-3 font-weight-bold"><?php echo $myQuery->title; ?></h3>
										<div style="color:#FFF;"><?php echo $myQuery->text; ?></div>
										<div class="tag-widget post-tag-container mb-3 mt-3">
											<div class="tagcloud">
												<a href="" class="tag-cloud-link"><?= $myQuery->tag1; ?></a>
												<a href="" class="tag-cloud-link"><?= $myQuery->tag2; ?></a>
												<a href="" class="tag-cloud-link"><?= $myQuery->tag3; ?></a>
											</div>
                                            <div class="mb-2 mt-2 font-weight-bold  " style="font-size:20px;color:#fff;"><?= $myQuery1->team_name; ?> • <?=date("d-m-Y", strtotime($blogDate)); ?></div>
										</div>
										<div class="pt-0 mt-3">
											<h3 style="color:#f3c623;" class="mb-5 font-weight-bold">Yorumlar</h3>
											<ul class="comment-list">
											<?php foreach($blogYorum as $items){ ?>
												<li class="comment">
													
													<div class="comment-body">
														<h3><?=$items["name"]; ?></h3>
														<p><?=$items["text"]; ?></p>
														<div style="float:right;" class="meta"><?=date("d-m-Y", strtotime($items["time"])); ?></div>
													</div>
												</li>
												<?php } ?>
											
											</ul>
											<!-- END comment-list -->
											
											<div class="comment-form-wrap col-md-12 pt-5">
												<h3 style="color:#f3c623;" class="mb-5">Yorum Yaz</h3>
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
                                                        <input type="hidden" name="yaziBaslik" class="form-control" id="textTitle" value="<?php echo $myQuery->title; ?>">
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