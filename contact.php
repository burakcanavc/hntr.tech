
<?php
require 'header.php';

/* Veritabanı tablo çağırma işlemi */
$db=new Database();
$myQuery=$db->getRow(" Call sp_Contact()");	
/* İşlem sonu */

/* Mesaj gönderme işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['message_submit'])){
	
	$isim = security("isim");
  
	$mail = security("mail");
  
	$baslik = security("baslik");
  
	$yazi = security("yazi");
  
	$insert=$db->Insert('INSERT INTO `tbl_messages` SET name=?, mail=?, title=?, text=?',array($isim,$mail,$baslik,$yazi));
  
	if($insert){
	
	  $mesajBasarili="Mesajınız başarılı şekilde gönderilmiştir. Birazdan sayfa otomatik olarak yenilenecektir.";
	  echo '<meta http-equiv="refresh" content="3;URL=https://hntr.tech/contact.php">';
  
	 }
	
	}/* İşlem sonu */

?>
			<div id="colorlib-main">
				<section class="ftco-section ftco-no-pt ftco-no-pb">
					<div class="container px-md-0">
						<div class="row d-flex no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4 heading">MESAJ GÖNDERİN</h3>
									<br><br>
									
									<form method="POST" id="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">İSİM SOYİSİM</label>
													<input type="text" class="form-control" name="isim" placeholder="İsim Soyisim">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">EMAİL ADRESİ</label>
													<input type="email" class="form-control" name="mail" placeholder="Email Adresi">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">KONU</label>
													<input type="text" class="form-control" name="baslik" placeholder="Konu">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Mesaj</label>
													<textarea name="yazi" class="form-control" cols="30" rows="4" placeholder="Mesaj"></textarea>
												</div>
											</div>
											<div class="submitting" style="color: #FFF;"><?=$mesajBasarili ?></div>
											<div class="col-md-12">
												<div class="form-group">
													<br><input type="submit" name="message_submit" value="Gönder" class="btn btn-primary">
													
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap js-fullheight bg-primary w-100 p-md-5 p-4">
									<h3>İletişime Geçelim</h3>
									<p class="mb-4">Herhangi bir öneriye veya sadece konuşmaya bile açığız.</p>
									
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-envelope"></span>
										</div>
										<div class="text pl-3">
											<p><span>Mail: </span> <a href="mailto:<?php echo $myQuery->email; ?>"><?php echo $myQuery->email; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Mail:</span> <a href="mailto:<?php echo $myQuery->email2; ?>"><?php echo $myQuery->email2; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-instagram"></span>
										</div>
										<div class="text pl-3">
											<p><span>Instagram: </span> <a href="https://www.instagram.com/<?php echo $myQuery->instagram; ?>"><?php echo $myQuery->instagram; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-linkedin"></span>
										</div>
										<div class="text pl-3">
											<p><span>LinkedIn: </span> <a href="https://www.linkedin.com/in/<?php echo $myQuery->linkedin; ?>"><?php echo $myQuery->instagram; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-pin"></span>
										</div>
										<div class="text pl-3">
											<p><span>Adres: </span><?php echo $myQuery->adres; ?></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Google Maps: </span>Aşağıda yer alan Google Maps modülünü kullanabilirsiniz.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="harita">
						<iframe src="<?php echo $myQuery->iframe_link; ?>" width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</section>
			</div><!-- END COLORLIB-MAIN -->
		</div><!-- END COLORLIB-PAGE -->

		<?php include 'footer.php'; ?>