
<?php include 'header.php'; 

try{
	global $db;
$db = new PDO("mysql:host=localhost;dbname=hntr.tech;charset=utf8", "root","");
}catch(PDOException $e){
	die("OLMADI".$e->getMessage());
}

$about= $db->query("SELECT * FROM tbl_about WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
$team= $db->query("SELECT * FROM tbl_team WHERE id = 1")->fetch(PDO::FETCH_ASSOC);

?>
			<div id="colorlib-main">
				<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
					<div class="container-fluid px-0">
						<div class="row d-flex">
							<div class="col-md-6 d-flex">
								<img class="deneme img d-flex align-self-stretch align-items-center " src="<?= $about['img']; ?>" alt="about-photo">
							</div>
							<div class="col-md-6 d-flex align-items-center">
								<div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate">
									<h2 class="mb-4"><span><?= $about['title']; ?></span></h2>
									<p>  <?= $about['text']; ?>  </p>
									<div class="team-wrap row mt-4">
										<div class="col-md-4 team">
											<div class="img" style="background-image: url(<?= $team['img']; ?>);"></div>
											<h3><?= $team['name']; ?></h3>
											<span></span><?= $team['department']; ?>
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