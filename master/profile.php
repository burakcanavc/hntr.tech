<?php

require 'header.php';



/* Veritabanı tablo çağırma işlemi */

$db=new Database();

$myQuery=$db->getRow("Call sp_Profile()");

/* İşlem sonu */



/* Yönetici isim update işlemi */

if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['name_submit'])){

$isim = security("isim");

$update=$db->Update('UPDATE tbl_profile SET name=?',array($isim));

if($update){

  echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/profile.php">';

 }

}/* İşlem sonu */

/* Yönetici fotoğrafını sunucuya yükleme ve fotoğraf ismini veritabanına update işlemi */

$takeFile=$_FILES["myFile"];
$fileName=$takeFile["name"];
$fileTempName=$takeFile["tmp_name"];
$myPath="../images/".$fileName;

if(move_uploaded_file($fileTempName, $myPath)){
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['img_submit'])){

  $update=$db->Update('UPDATE tbl_profile SET img=?',array($fileName));

  if($update){

    echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/profile.php">';

   }
  }
}/* İşlem sonu */

?>



<!-- partial -->

<div class="main-panel">

          <div class="content-wrapper">
          <div class="row">
         

           <!--about text -->

           <div class="col-md-6 grid-margin stretch-card">

                <div class="card">

                  <div class="card-body">

                  <div class="form-group">

                  <h3 style="text-align:center; " class="card-title">Yönetici Fotoğrafı</h3>

                

                  <br>

                  <div style="text-align: center">

                  <img style="max-width:50%; height: auto;" src="../images/<?php echo $myQuery->img; ?>" alt="about">

                  </div>

                  <br>

                  <div style="text-align: center">

                  <h4>Fotoğraf Yükle</h4>
                  </div>
                  <div style="text-align: center">
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                  <br>
                  <input type="file" name="myFile">
                          <span>
                            <button name="img_submit" class="btn btn-primary btn-icon-text" type="submit"><i class="mdi mdi-upload btn-icon-prepend"></i>Kaydet</button>
                          </span>
                          </form>
                          </div>
                          
                          </div>

                  </div>

                </div>

              </div>

              <!-- end about text -->

             



              <!--about image -->

             

             <div class="col-md-6 grid-margin stretch-card">

                <div class="card">

                  <div class="card-body">

                  <div class="form-group">

                  

                


                          <h3  style="text-align:center;" class="card-title">Yönetici İsmi</h3>

              

                    <form class="forms-sample" method="POST">

                      <div class="form-group">

                        <h4 for="exampleInputName1">İsim</h4>

                        <input type="text" name="isim" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->name; ?>">

                      </div>

                     <div style="text-align:center;"><br>

                      <button type="submit" name="name_submit" class="btn btn-primary mr-2">Kaydet</button>

                      <button class="btn btn-dark">İptal</button>

                      </div>

                    </form> <br><br><br>

                      <h3  style="text-align:center;" class="card-title">Yönetici Giriş Bilgileri</h3>

              

                    <form class="forms-sample" method="POST">

                      <div class="form-group">

                        <h4 for="exampleInputName1">Kullanıcı Adı</h4>

                        <input type="text" name="ekip_isim" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->team_name; ?>">

                      </div>

                      <div class="form-group">

                        <h4 for="exampleInputName1">Parola</h4>

                        <input type="text" name="ekip_dpt" class="form-control" id="exampleInputName1">

                      </div>

                     <div style="text-align:center;"><br>

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