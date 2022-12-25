<?php
require 'header.php';

/* Veritabanı tablo çağırma işlemi */
$db1=new Database();
$myQuery1=$db1->getRow(" Call sp_Service1()");
$db2=new Database();
$myQuery2=$db2->getRow(" Call sp_Service2()");
$db3=new Database();
$myQuery3=$db3->getRow(" Call sp_Service3()");
$db4=new Database();
$myQuery4=$db4->getRow(" Call sp_Service4()");
/* İşlem sonu */

/* İçerik-1 başlık ve yazı update işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['service1_submit'])){
  $hizmet1_anabaslik = security("hizmet1_anabaslik");
  $hizmet1_baslik1 = security("hizmet1_baslik1");
  $hizmet1_yazi1 = security("hizmet1_yazi1");
  $hizmet1_baslik2 = security("hizmet1_baslik2");
  $hizmet1_yazi2 = security("hizmet1_yazi2");
  $hizmet1_baslik3 = security("hizmet1_baslik3");
  $hizmet1_yazi3 = security("hizmet1_yazi3");
  $hizmet1_baslik4 = security("hizmet1_baslik4");
  $hizmet1_yazi4 = security("hizmet1_yazi4");
  $hizmet1_baslik5 = security("hizmet1_baslik5");
  $hizmet1_yazi5 = security("hizmet1_yazi5");
  $update1=$db1->Update('UPDATE tbl_services SET main_title=?, title_1=?, text_1=?, title_2=?, text_2=?, title_3=?, text_3=?,
  title_4=?, text_4=?, title_5=?, text_5=? WHERE id=1',array($hizmet1_anabaslik,$hizmet1_baslik1,$hizmet1_yazi1,$hizmet1_baslik2,
  $hizmet1_yazi2,$hizmet1_baslik3,$hizmet1_yazi3,$hizmet1_baslik4,$hizmet1_yazi4,$hizmet1_baslik5,$hizmet1_yazi5));
  if($update1){
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost/hntr.tech/master/services.php">';
   }
  }/* İşlem sonu */

/* İçerik-2 başlık ve yazı update işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['service2_submit'])){
  $hizmet2_anabaslik = security("hizmet2_anabaslik");
  $hizmet2_baslik1 = security("hizmet2_baslik1");
  $hizmet2_yazi1 = security("hizmet2_yazi1");
  $hizmet2_baslik2 = security("hizmet2_baslik2");
  $hizmet2_yazi2 = security("hizmet2_yazi2");
  $hizmet2_baslik3 = security("hizmet2_baslik3");
  $hizmet2_yazi3 = security("hizmet2_yazi3");
  $hizmet2_baslik4 = security("hizmet2_baslik4");
  $hizmet2_yazi4 = security("hizmet2_yazi4");
  $hizmet2_baslik5 = security("hizmet2_baslik5");
  $hizmet2_yazi5 = security("hizmet2_yazi5");
  $update2=$db2->Update('UPDATE tbl_services SET main_title=?, title_1=?, text_1=?, title_2=?, text_2=?, title_3=?, text_3=?,
  title_4=?, text_4=?, title_5=?, text_5=? WHERE id=2',array($hizmet2_anabaslik,$hizmet2_baslik1,$hizmet2_yazi1,$hizmet2_baslik2,
  $hizmet2_yazi2,$hizmet2_baslik3,$hizmet2_yazi3,$hizmet2_baslik4,$hizmet2_yazi4,$hizmet2_baslik5,$hizmet2_yazi5));
  if($update2){
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost/hntr.tech/master/services.php">';
   }
  }/* İşlem sonu */

  /* İçerik-3 başlık ve yazı update işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['service3_submit'])){
  $hizmet3_anabaslik = security("hizmet3_anabaslik");
  $hizmet3_baslik1 = security("hizmet3_baslik1");
  $hizmet3_yazi1 = security("hizmet3_yazi1");
  $hizmet3_baslik2 = security("hizmet3_baslik2");
  $hizmet3_yazi2 = security("hizmet3_yazi2");
  $hizmet3_baslik3 = security("hizmet3_baslik3");
  $hizmet3_yazi3 = security("hizmet3_yazi3");
  $hizmet3_baslik4 = security("hizmet3_baslik4");
  $hizmet3_yazi4 = security("hizmet3_yazi4");
  $hizmet3_baslik5 = security("hizmet3_baslik5");
  $hizmet3_yazi5 = security("hizmet3_yazi5");
  $update3=$db3->Update('UPDATE tbl_services SET main_title=?, title_1=?, text_1=?, title_2=?, text_2=?, title_3=?, text_3=?,
  title_4=?, text_4=?, title_5=?, text_5=? WHERE id=3',array($hizmet3_anabaslik,$hizmet3_baslik1,$hizmet3_yazi1,$hizmet3_baslik2,
  $hizmet3_yazi2,$hizmet3_baslik3,$hizmet3_yazi3,$hizmet3_baslik4,$hizmet3_yazi4,$hizmet3_baslik5,$hizmet3_yazi5));
  if($update3){
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost/hntr.tech/master/services.php">';
   }
  }/* İşlem sonu */

  /* İçerik-4 başlık ve yazı update işlemi */
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['service4_submit'])){
  $hizmet4_anabaslik = security("hizmet4_anabaslik");
  $hizmet4_baslik1 = security("hizmet4_baslik1");
  $hizmet4_yazi1 = security("hizmet4_yazi1");
  $hizmet4_baslik2 = security("hizmet4_baslik2");
  $hizmet4_yazi2 = security("hizmet4_yazi2");
  $hizmet4_baslik3 = security("hizmet4_baslik3");
  $hizmet4_yazi3 = security("hizmet4_yazi3");
  $hizmet4_baslik4 = security("hizmet4_baslik4");
  $hizmet4_yazi4 = security("hizmet4_yazi4");
  $hizmet4_baslik5 = security("hizmet4_baslik5");
  $hizmet4_yazi5 = security("hizmet4_yazi5");
  $update4=$db4->Update('UPDATE tbl_services SET main_title=?, title_1=?, text_1=?, title_2=?, text_2=?, title_3=?, text_3=?,
  title_4=?, text_4=?, title_5=?, text_5=? WHERE id=4',array($hizmet4_anabaslik,$hizmet4_baslik1,$hizmet4_yazi1,$hizmet4_baslik2,
  $hizmet4_yazi2,$hizmet4_baslik3,$hizmet4_yazi3,$hizmet4_baslik4,$hizmet4_yazi4,$hizmet4_baslik5,$hizmet4_yazi5));
  if($update4){
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost/hntr.tech/master/services.php">';
   }
  }/* İşlem sonu */

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
              
                    <form class="forms-sample" method="POST">
                    <div class="form-group">
                    <h4 for="exampleInputName1">Ana Başlık</h4>
                        <input type="text" name="hizmet1_anabaslik" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->main_title; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-1</h4>
                        <input type="text" name="hizmet1_baslik1" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-1</h4>
                        <input type="text" name="hizmet1_yazi1" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-2</h4>
                        <input type="text" name="hizmet1_baslik2" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-2</h4>
                        <input type="text" name="hizmet1_yazi2" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-3</h4>
                        <input type="text" name="hizmet1_baslik3" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-3</h4>
                        <input type="text" name="hizmet1_yazi3" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-4</h4>
                        <input type="text" name="hizmet1_baslik4" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-4</h4>
                        <input type="text" name="hizmet1_yazi4" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-5</h4>
                        <input type="text" name="hizmet1_baslik5" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->title_5; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-5</h4>
                        <input type="text" name="hizmet1_yazi5" class="form-control" id="exampleInputName1" value="<?php echo $myQuery1->text_5; ?>">
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" name="service1_submit" class="btn btn-primary mr-2">Kaydet</button>
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
              
                    <form class="forms-sample" method="POST">
                    <div class="form-group">
                    <h4 for="exampleInputName1">Ana Başlık</h4>
                        <input type="text" name="hizmet2_anabaslik" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->main_title; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-1</h4>
                        <input type="text" name="hizmet2_baslik1" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-1</h4>
                        <input type="text" name="hizmet2_yazi1" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-2</h4>
                        <input type="text" name="hizmet2_baslik2" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-2</h4>
                        <input type="text" name="hizmet2_yazi2" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-3</h4>
                        <input type="text" name="hizmet2_baslik3" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-3</h4>
                        <input type="text" name="hizmet2_yazi3" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-4</h4>
                        <input type="text" name="hizmet2_baslik4" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-4</h4>
                        <input type="text" name="hizmet2_yazi4" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-5</h4>
                        <input type="text" name="hizmet2_baslik5" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->title_5; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-5</h4>
                        <input type="text" name="hizmet2_yazi5" class="form-control" id="exampleInputName1" value="<?php echo $myQuery2->text_5; ?>">
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" name="service2_submit" class="btn btn-primary mr-2">Kaydet</button>
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
              
                    <form class="forms-sample" method="POST">
                    <div class="form-group">
                        <h4 for="exampleInputName1">Ana Başlık</h4>
                        <input type="text" name="hizmet3_anabaslik" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->main_title; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-1</h4>
                        <input type="text" name="hizmet3_baslik1" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-1</h4>
                        <input type="text" name="hizmet3_yazi1" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-2</h4>
                        <input type="text" name="hizmet3_baslik2" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-2</h4>
                        <input type="text" name="hizmet3_yazi2" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-3</h4>
                        <input type="text" name="hizmet3_baslik3" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-3</h4>
                        <input type="text" name="hizmet3_yazi3" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-4</h4>
                        <input type="text" name="hizmet3_baslik4" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-4</h4>
                        <input type="text" name="hizmet3_yazi4" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-5</h4>
                        <input type="text" name="hizmet3_baslik5" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->title_5; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-5</h4>
                        <input type="text" name="hizmet3_yazi5" class="form-control" id="exampleInputName1" value="<?php echo $myQuery3->text_5; ?>">
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" name="service3_submit" class="btn btn-primary mr-2">Kaydet</button>
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
              
                    <form class="forms-sample" method="POST">
                    <div class="form-group">
                    <h4 for="exampleInputName1">Ana Başlık</h4>
                        <input type="text" name="hizmet4_anabaslik" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->main_title; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-1</h4>
                        <input type="text" name="hizmet4_baslik1" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-1</h4>
                        <input type="text" name="hizmet4_yazi1" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_1; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-2</h4>
                        <input type="text" name="hizmet4_baslik2" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-2</h4>
                        <input type="text" name="hizmet4_yazi2" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-3</h4>
                        <input type="text" name="hizmet4_baslik3" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-3</h4>
                        <input type="text" name="hizmet4_yazi3" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_3; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-4</h4>
                        <input type="text" name="hizmet4_baslik4" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-4</h4>
                        <input type="text" name="hizmet4_yazi4" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_4; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık-5</h4>
                        <input type="text" name="hizmet4_baslik5" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->title_5; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Özellik-5</h4>
                        <input type="text" name="hizmet4_yazi5" class="form-control" id="exampleInputName1" value="<?php echo $myQuery4->text_5; ?>">
                      </div>
                      <div style="text-align:center;">
                      <button type="submit" name="service4_submit" class="btn btn-primary mr-2">Kaydet</button>
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