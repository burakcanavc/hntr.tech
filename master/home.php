<?php
require 'header.php';

/* Veritabanı tablo çağırma işlemi */
$db=new Database();
$myQuery=$db->getRow(" Call sp_Home()");
/* İşlem sonu */

/* Ana başlık update işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['main_submit'])){
  $ana_baslik = security("ana_baslik");
  $update=$db->Update('UPDATE tbl_home SET main_title=?',array($ana_baslik));
  if($update){
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost/hntr.tech/master/home.php">';
   }
  }/* İşlem sonu */

  /* İçerik-1 başlık ve yazı update işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['content1_submit'])){
  $icerik1_baslik = security("icerik1_baslik");
  $icerik1_yazi = security("icerik1_yazi");
  $update=$db->Update('UPDATE tbl_home SET title_content1=?, text_content1=?',array($icerik1_baslik,$icerik1_yazi));
  if($update){
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost/hntr.tech/master/home.php">';
   }
  }/* İşlem sonu */
  
  /* İçerik-2 başlık ve yazı update işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['content2_submit'])){
  $icerik2_baslik = security("icerik2_baslik");
  $icerik2_yazi = security("icerik2_yazi");
  $update=$db->Update('UPDATE tbl_home SET title_content2=?, text_content2=?',array($icerik2_baslik,$icerik2_yazi));
  if($update){
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost/hntr.tech/master/home.php">';
   }
  }/* İşlem sonu */

  /* İçerik-3 başlık ve yazı update işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['content3_submit'])){
  $icerik3_baslik = security("icerik3_baslik");
  $icerik3_yazi = security("icerik3_yazi");
  $update=$db->Update('UPDATE tbl_home SET title_content3=?, text_content3=?',array($icerik3_baslik,$icerik3_yazi));
  if($update){
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost/hntr.tech/master/home.php">';
   }
  }/* İşlem sonu */

  /* İçerik-4 başlık ve yazı update işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['content4_submit'])){
  $icerik4_baslik = security("icerik4_baslik");
  $icerik4_yazi = security("icerik4_yazi");
  $update=$db->Update('UPDATE tbl_home SET title_content4=?, text_content4=?',array($icerik4_baslik,$icerik4_yazi));
  if($update){
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost/hntr.tech/master/home.php">';
   }
  }/* İşlem sonu */

?>

<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
           
             <!--main content -->
             
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="form-group">
                  <h3 style="text-align:center; " class="card-title">Ana Fotoğraf</h3>
                
                  <br>
                  <div style="text-align: center">
                  <img style="max-width:50%; height: auto;" src="../images/<?php echo $myQuery->img_main; ?>" alt="about">
                  </div>
                  <br>
                  <div style="text-align: center">
                  <h4>Fotoğraf Yükle</h4>
                  </div>
                  <div style="text-align: center">
                
                          <span>
                            <button class="btn btn-primary btn-icon-text" type="button"><i class="mdi mdi-upload btn-icon-prepend"></i>Yükle</button>
                          </span>
                          </div>
                          <br><br>
                          <hr size="10" color="#fff">
                          <br>
                          <h3  style="text-align:center;" class="card-title">Ana Yazı</h3>
              
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık Site Adı</h4>
                        <input type="text" name="ana_baslik" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->main_title; ?>">
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" name="main_submit" class="btn btn-primary mr-2">Kaydet</button>
                      <button class="btn btn-dark">İptal</button>
                      </div>
                    </form>
                    
                      </div>
                 </div>
                </div>
              </div>
              <!-- end main content -->
              <!--about image -->
             
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="form-group">
                  <h3 style="text-align:center; " class="card-title">İçerik-1 Fotoğraf</h3>
                
                  <br>
                  <div style="text-align: center">
                  <img style="max-width:50%; height: auto;" src="../images/<?php echo $myQuery->img_content1; ?>" alt="about">
                  </div>
                  <br>
                  <div style="text-align: center">
                  <h4>Fotoğraf Yükle</h4>
                  </div>
                  <div style="text-align: center">
                
                          <span>
                            <button class="btn btn-primary btn-icon-text" type="button"><i class="mdi mdi-upload btn-icon-prepend"></i>Yükle</button>
                          </span>
                          </div>
                          <br><br>
                          <hr size="10" color="#fff">
                          <br>
                          <h3  style="text-align:center;" class="card-title">İçerik-1 Yazı</h3>
              
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık</h4>
                        <input type="text" name="icerik1_baslik" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->title_content1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleTextarea1">Yazı</h4>
                        <textarea class="form-control" name="icerik1_yazi" id="exampleTextarea1" rows="7"><?php echo $myQuery->text_content1; ?></textarea>
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" name="content1_submit" class="btn btn-primary mr-2">Kaydet</button>
                      <button class="btn btn-dark">İptal</button>
                      </div>
                    </form>
                    
                      </div>
                 </div>
                </div>
              </div>
              <!-- end about image -->
              <!--about image -->
             
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="form-group">
                  <h3 style="text-align:center; " class="card-title">İçerik-2 Fotoğraf</h3>
                
                  <br>
                  <div style="text-align: center">
                  <img style="max-width:50%; height: auto;" src="../images/<?php echo $myQuery->img_content2; ?>" alt="about">
                  </div>
                  <br>
                  <div style="text-align: center">
                  <h4>Fotoğraf Yükle</h4>
                  </div>
                  <div style="text-align: center">
                
                          <span>
                            <button class="btn btn-primary btn-icon-text" type="button"><i class="mdi mdi-upload btn-icon-prepend"></i>Yükle</button>
                          </span>
                          </div>
                          <br><br>
                          <hr size="10" color="#fff">
                          <br>
                          <h3  style="text-align:center;" class="card-title">İçerik-2 Yazı</h3>
              
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık</h4>
                        <input type="text" name="icerik2_baslik" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->title_content2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleTextarea1">Yazı</h4>
                        <textarea class="form-control" name="icerik2_yazi" id="exampleTextarea1" rows="7"><?php echo $myQuery->text_content2; ?></textarea>
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" name="content2_submit" class="btn btn-primary mr-2">Kaydet</button>
                      <button class="btn btn-dark">İptal</button>
                      </div>
                    </form>
                    
                      </div>
                 </div>
                </div>
              </div>
              <!-- end about image -->
              <!--about image -->
             
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="form-group">
                  <h3 style="text-align:center; " class="card-title">İçerik-3 Fotoğraf</h3>
                
                  <br>
                  <div style="text-align: center">
                  <img style="max-width:50%; height: auto;" src="../images/<?php echo $myQuery->img_content3; ?>" alt="about">
                  </div>
                  <br>
                  <div style="text-align: center">
                  <h4>Fotoğraf Yükle</h4>
                  </div>
                  <div style="text-align: center">
                
                          <span>
                            <button class="btn btn-primary btn-icon-text" type="button"><i class="mdi mdi-upload btn-icon-prepend"></i>Yükle</button>
                          </span>
                          </div>
                          <br><br>
                          <hr size="10" color="#fff">
                          <br>
                          <h3  style="text-align:center;" class="card-title">İçerik-3 Yazı</h3>
              
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık</h4>
                        <input type="text" name="icerik3_baslik" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->title_content3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleTextarea1">Yazı</h4>
                        <textarea class="form-control" name="icerik3_yazi" id="exampleTextarea1" rows="7"><?php echo $myQuery->text_content3; ?></textarea>
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" name="content3_submit" class="btn btn-primary mr-2">Kaydet</button>
                      <button class="btn btn-dark">İptal</button>
                      </div>
                    </form>
                    
                      </div>
                 </div>
                </div>
              </div>
              <!-- end about image -->
              <!--about image -->
             
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="form-group">
                  <h3 style="text-align:center; " class="card-title">İçerik-4 Fotoğraf</h3>
                
                  <br>
                  <div style="text-align: center">
                  <img style="max-width:50%; height: auto;" src="../images/<?php echo $myQuery->img_content4; ?>" alt="about">
                  </div>
                  <br>
                  <div style="text-align: center">
                  <h4>Fotoğraf Yükle</h4>
                  </div>
                  <div style="text-align: center">
                
                          <span>
                            <button class="btn btn-primary btn-icon-text" type="button"><i class="mdi mdi-upload btn-icon-prepend"></i>Yükle</button>
                          </span>
                          </div>
                          <br><br>
                          <hr size="10" color="#fff">
                          <br>
                          <h3  style="text-align:center;" class="card-title">İçerik-4 Yazı</h3>
              
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık</h4>
                        <input type="text" name="icerik4_baslik" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->title_content4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleTextarea1">Yazı</h4>
                        <textarea class="form-control" name="icerik4_yazi" id="exampleTextarea1" rows="7"><?php echo $myQuery->text_content4; ?></textarea>
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" name="content4_submit" class="btn btn-primary mr-2">Kaydet</button>
                      <button class="btn btn-dark">İptal</button>
                      </div>
                    </form>
                    
                      </div>
                 </div>
                </div>
              </div>
              <!-- end about image -->
              

          

          </div>
          <!-- content-wrapper ends -->

<?php include 'footer.php'; ?>