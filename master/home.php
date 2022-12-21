<?php
require 'header.php';
require '../classes/db.php';

$db=new Database();
$myQuery=$db->getRow(" Call sp_Home()");
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
              
                    <form class="forms-sample">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık Site Adı</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->main_title; ?>">
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
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
              
                    <form class="forms-sample">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık</h4>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleTextarea1">Yazı</h4>
                        <textarea class="form-control" id="exampleTextarea1" rows="7"></textarea>
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
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
              
                    <form class="forms-sample">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık</h4>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleTextarea1">Yazı</h4>
                        <textarea class="form-control" id="exampleTextarea1" rows="7"></textarea>
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
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
              
                    <form class="forms-sample">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık</h4>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleTextarea1">Yazı</h4>
                        <textarea class="form-control" id="exampleTextarea1" rows="7"></textarea>
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
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
              
                    <form class="forms-sample">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık</h4>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleTextarea1">Yazı</h4>
                        <textarea class="form-control" id="exampleTextarea1" rows="7"></textarea>
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
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