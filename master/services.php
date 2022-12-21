<?php
require 'header.php';

$db1=new Database();
$myQuery1=$db1->getRow(" Call sp_Service1()");
$db2=new Database();
$myQuery2=$db2->getRow(" Call sp_Service2()");
$db3=new Database();
$myQuery3=$db3->getRow(" Call sp_Service3()");
$db4=new Database();
$myQuery4=$db4->getRow(" Call sp_Service4()");
?>

<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
        
              <!--about image -->
             
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="form-group">
                  <h3 style="text-align:center; " class="card-title">Hizmet-1 Fotoğraf</h3>
                
                  <br>
                  <div style="text-align: center">
                  <img style="max-width:45%; height: auto;" src="../images/<?php echo $myQuery1->img; ?>" alt="about">
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
                          <h3  style="text-align:center;" class="card-title">Hizmet-1 Yazı</h3>
              
                    <form class="forms-sample">
                    <div class="form-group">
                    <h4 for="exampleInputName1">Ana Başlık</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->main_title; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-1</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-1</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-2</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-2</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-3</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-3</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-4</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-4</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-5</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_5; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-5</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_5; ?>">
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
                  <h3 style="text-align:center; " class="card-title">Hizmet-2 Fotoğraf</h3>
                
                  <br>
                  <div style="text-align: center">
                  <img style="max-width:45%; height: auto;" src="../images/<?php echo $myQuery2->img; ?>" alt="about">
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
                          <h3  style="text-align:center;" class="card-title">Hizmet-2 Yazı</h3>
              
                    <form class="forms-sample">
                    <div class="form-group">
                    <h4 for="exampleInputName1">Ana Başlık</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->main_title; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-1</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-1</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-2</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-2</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-3</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-3</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-4</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-4</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-5</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_5; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-5</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_5; ?>">
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
                  <h3 style="text-align:center; " class="card-title">Hizmet-3 Fotoğraf</h3>
                
                  <br>
                  <div style="text-align: center">
                  <img style="max-width:45%; height: auto;" src="../images/<?php echo $myQuery3->img; ?>" alt="about">
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
                          <h3  style="text-align:center;" class="card-title">Hizmet-3 Yazı</h3>
              
                    <form class="forms-sample">
                    <div class="form-group">
                        <h4 for="exampleInputName1">Ana Başlık</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->main_title; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-1</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-1</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-2</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-2</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-3</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-3</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-4</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-4</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-5</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_5; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-5</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_5; ?>">
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
                  <h3 style="text-align:center; " class="card-title">Hizmet-4 Fotoğraf</h3>
                
                  <br>
                  <div style="text-align: center">
                  <img style="max-width:45%; height: auto;" src="../images/<?php echo $myQuery4->img; ?>" alt="about">
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
                          <h3  style="text-align:center;" class="card-title">Hizmet-4 Yazı</h3>
              
                    <form class="forms-sample">
                    <div class="form-group">
                    <h4 for="exampleInputName1">Ana Başlık</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->main_title; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-1</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-1</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-2</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-2</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-3</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-3</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-4</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-4</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-5</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_5; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-5</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_5; ?>">                     </div>
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