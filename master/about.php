<?php

require 'header.php';



/* Veritabanı tablo çağırma işlemi */

$db=new Database();

$myQuery=$db->getRow("Call sp_About()");

/* İşlem sonu */



/* Hakkımızda başlık ve yazı update işlemi */

if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['about_submit'])){

$baslik = security("baslik");

$yazi = security("yazi");

$update=$db->Update('UPDATE tbl_about SET title=?, text=?',array($baslik,$yazi));

if($update){

  echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/about.php">';

 }

}/* İşlem sonu */



/* Ekip isim ve iş pozisyonu update işlemi */

if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['team_submit'])){

  $ekip_isim = security("ekip_isim");

  $ekip_dpt = security("ekip_dpt");

  $update=$db->Update('UPDATE tbl_about SET team_name=?, team_dpt=?',array($ekip_isim,$ekip_dpt));

  if($update){

    echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/about.php">';

   }

  }/* İşlem sonu */

  /* Hakkımızda fotoğrafını sunucuya yükleme ve fotoğraf ismini veritabanına update işlemi */

  $takeFile=$_FILES["myFile"];
  $fileName=$takeFile["name"];
  $fileTempName=$takeFile["tmp_name"];
  $myPath="../images/".$fileName;

if(move_uploaded_file($fileTempName, $myPath)){
  if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['img_submit'])){

    $update=$db->Update('UPDATE tbl_about SET img=?',array($fileName));
  
    if($update){
  
      echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/about.php">';
  
     }
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

                  <h3 style="text-align:center; " class="card-title">Hakkımızda Fotoğrafı</h3>

                

                  <br>

                  <div style="text-align: center">

                  <img style="max-width:50%; height: auto;" src="../images/<?php echo $myQuery->img; ?>" alt="about">

                  </div>

                  <br>

                  <div style="text-align: center">

                  Fotoğraf Yükle

                  </div>
                              <br>
                  <div style="text-align: center">

              
                          <form class="forms-sample" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                      
                    <input type="file" name="myFile">

                      </div>
                    <br>
                      <div style="text-align:center;">

                      <button class="btn btn-primary btn-icon-text" name="img_submit" type="submit"><i class="mdi mdi-upload btn-icon-prepend"></i>Yükle</button>

                      </div>

                    </form>
                            

                          

                    

                      </div>

                    </div>

                  

                 </div>

                </div>

              </div>

              <!-- end about image -->

           <!--about text -->

           <div class="col-12 grid-margin stretch-card">

                <div class="card">

                  <div class="card-body">

                    <h3  style="text-align:center;" class="card-title">Hakkımızda Yazısı</h3>

                    

                    

                    <form class="forms-sample" method="POST">

                      <div class="form-group">

                        <h4 for="exampleInputName1">Başlık</h4>

                        <input name="baslik" type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->title; ?>">

                      </div>

                      <div class="form-group">

                        <h4 for="exampleTextarea1">Yazı</h4>

                        <textarea name="yazi" class="form-control" id="exampleTextarea1" rows="7"><?php echo $myQuery->text; ?></textarea>

                      </div>

                      <div style="text-align:center;">

                      <button name="about_submit" type="submit" class="btn btn-primary mr-2">Kaydet</button>

                      <button class="btn btn-dark">İptal</button>

                      </div>

                    </form>

                  </div>

                </div>

              </div>

              <!-- end about text -->

             



              <!--about image -->

             

             <div class="col-12 grid-margin stretch-card">

                <div class="card">

                  <div class="card-body">

                  <div class="form-group">

                  <h3 style="text-align:center; " class="card-title">Ekip-1 Fotoğraf</h3>

                

                  <br>

                  <div style="text-align: center">

                  <img style="max-width:40%; height: auto;" src="../images/<?php echo $myQuery->team_img; ?>" alt="about">

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

                          <h3  style="text-align:center;" class="card-title">Ekip-1 Yazı</h3>

              

                    <form class="forms-sample" method="POST">

                      <div class="form-group">

                        <h4 for="exampleInputName1">İsim</h4>

                        <input type="text" name="ekip_isim" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->team_name; ?>">

                      </div>

                      <div class="form-group">

                        <h4 for="exampleInputName1">İş Pozisyonu</h4>

                        <input type="text" name="ekip_dpt" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->team_dpt; ?>">

                      </div>

                     <div style="text-align:center;">

                      <button type="submit" name="team_submit" class="btn btn-primary mr-2">Kaydet</button>

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