
<?php
include 'header.php';

try{
	global $db;
$db = new PDO("mysql:host=localhost;dbname=hntr.tech;charset=utf8", "root","");
}catch(PDOException $e){
	die("OLMADI".$e->getMessage());
}

$contact= $db->query("SELECT * FROM tbl_contact WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
?>
			<div id="colorlib-main">
				<section class="ftco-section ftco-no-pt ftco-no-pb">
					<div class="container px-md-0">
						<div class="row d-flex no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4 heading">MESAJ GÖNDEREBİLİRSİNİZ</h3>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">İSİM SOYİSİM</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="İsim Soyisim">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">EMAİL ADRESİ</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email Adresi">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">KONU</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Konu">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Mesaj</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Mesaj"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Gönder" class="btn btn-primary">
													<div class="submitting"></div>
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
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Email:</span> <a href="mailto:<?= $contact['email']; ?>"><?= $contact['email']; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-instagram"></span>
										</div>
										<div class="text pl-3">
											<p><span>Instagram:</span> <a href="https://www.instagram.com/<?= $contact['instagram']; ?>/"><?= $contact['instagram']; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Adres:</span> <?= $contact['adres']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="harita">
						<iframe src="<?= $contact['iframe_link']; ?>" width="1150" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</section>
			</div><!-- END COLORLIB-MAIN -->
		</div><!-- END COLORLIB-PAGE -->

		<?php include 'footer.php'; ?>