<?php
require 'header.php'; 
require '../classes/db.php';

$db=new Database();
$myQuery=$db->getRow(" Call sp_Contact()");
?>

<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
           
              <!--about text -->
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3  style="text-align:center;" class="card-title">İletişim</h3>
                    
                    
                    <form class="forms-sample">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Mail-1</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->email; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Mail-2</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->email2; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Instagram</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->instagram; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">LinkedIn</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->linkedin; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Adres</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->adres; ?>">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleInputName1">Google Maps Iframe Linki</h4>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $myQuery->iframe_link; ?>">
                      </div>
                     <div style="text-align:center;">
                      <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
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