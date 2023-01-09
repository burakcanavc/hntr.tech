<?php

require 'header.php';



/* Veritabanı tablo çağırma işlemi */

$db=new Database();

$myQuery=$db->getRow(" Call sp_Contact()");

/* İşlem sonu */



/* İletişim bölümü update işlemi */

if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['contact_submit'])){

  $mail1 = security("mail1");

  $mail2 = security("mail2");

  $instagram = security("instagram");

  $linkedin = security("linkedin");

  $adres = security("adres");

  $iframe_link = security("iframe_link");

  $update=$db->Update('UPDATE tbl_contact SET email=?, email2=?, instagram=?, linkedin=?, adres=?, iframe_link=?',array($mail1,$mail2,

  $instagram,$linkedin,$adres,$iframe_link));

  if($update){

   echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/contact.php">';

  }

  }/* İşlem sonu */

?>



<!-- partial -->

<div class="main-panel">

          <div class="content-wrapper">

           

              <!--about text -->

              <div class="col-12 grid-margin stretch-card">

                <div class="card">

                  <div class="card-body">

                    <h3  style="text-align:center;" class="card-title">İletişim</h3>

                    

                    

                    <form class="forms-sample" method="POST" >

                      <div class="form-group">

                        <h4 for="exampleInputName1">Mail-1</h4>

                        <input type="text" name="mail1" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->email; ?>">

                      </div>

                      <div class="form-group">

                        <h4 for="exampleInputName1">Mail-2</h4>

                        <input type="text" name="mail2" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->email2; ?>">

                      </div>

                      <div class="form-group">

                        <h4 for="exampleInputName1">Instagram</h4>

                        <input type="text" name="instagram" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->instagram; ?>">

                      </div>

                      <div class="form-group">

                        <h4 for="exampleInputName1">LinkedIn</h4>

                        <input type="text" name="linkedin" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->linkedin; ?>">

                      </div>

                      <div class="form-group">

                        <h4 for="exampleInputName1">Adres</h4>

                        <input type="text" name="adres" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->adres; ?>">

                      </div>

                      <div class="form-group">

                        <h4 for="exampleInputName1">Google Maps Iframe Linki</h4>

                        <input type="text" name="iframe_link" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->iframe_link; ?>">

                      </div>

                     <div style="text-align:center;">

                      <button type="submit" name="contact_submit" class="btn btn-primary mr-2">Kaydet</button>

                      <button class="btn btn-dark">İptal</button>

                      </div>

                    </form>

                  </div>

                </div>

              </div>

              <!-- end about text -->



          </div>

          <!-- content-wrapper ends -->



<?php include 'footer.php'; ?>