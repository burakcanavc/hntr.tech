<?php
require 'header.php';

/* Veritabanı tablo çağırma işlemi */
$db=new Database();
$blogYazisi=$db->TableOperations("SELECT * FROM tbl_blog",PDO::FETCH_ASSOC);
$myQuery=$db->getRow("Call sp_About()");
/* İşlem sonu */

?>
			<div id="colorlib-main">
				<section class="ftco-section ftco-no-pt ftco-no-pb">
					<div class="container px-md-0">
						<div class="row d-flex no-gutters">
							<div class="col-lg-12 pb-5 single">
								<div class="row">
                                  <div class="img img-blog w-100" style="background-image: url(images/code.jpg); height: 90%;text-align:center;">
                                  <br><br><br><br><br>
								 <h1 style="font-size: 80px; text-shadow: 1px 4px 4px black; color:#fff;" class="mb-3">Blog Yazılarım</h1></div>
									
								</div><!-- END-->
							</div>
						</div>
                        
						
                        <?php 
                        foreach($blogYazisi as $items){
                        ?>

                                        <div class="col-lg-12 pb-5 single" style="text-align:center;">

                        <a href="yazi-<?=$items["id"]; ?>"><div class="img img-blog w-100"
                        style="border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px; background-image: url(images/<?=$items["img"]; ?>);">
                    </div></a>
                         <br>
                        <a href="yazi-<?=$items["id"]; ?>" style="color:#fff;"><h4><?=$items["title"]; ?></h4></a>  
                        <div class="mb-3 mt-3" style="color:#FFF;"><?=strip_tags(substr($items["text"], 0, 500));?>...</div>
                        <p><a href="yazi-<?=$items["id"]; ?>">Devamını okumak için tıklayın.</a></p>
                        
                        <div class="tag-widget post-tag-container mb-3 mt-3">
											<div class="tagcloud">
												<a href="yazi-<?=$items["id"]; ?>" class="tag-cloud-link"><?=$items["tag1"]; ?></a>
												<a href="yazi-<?=$items["id"]; ?>" class="tag-cloud-link"><?=$items["tag2"]; ?></a>
												<a href="yazi-<?=$items["id"]; ?>" class="tag-cloud-link"><?=$items["tag3"]; ?></a>
											</div>
                                            <div class="mb-2 mt-2" style="color:#fff;"><?= $myQuery->team_name; ?> • <?=date("d-m-Y", strtotime($items["date"])); ?></div>
                                        <hr size="10" color="#f3c623"> <br>
										</div>
                                        <?php } ?>

				
				</section>
				
			</div><!-- END COLORLIB-MAIN -->
		</div><!-- END COLORLIB-PAGE -->

		<?php include 'footer.php'; ?>