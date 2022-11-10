<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

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
                  <img style="max-width:50%; height: auto;" src="assets/images/aboutus.jpg" alt="about">
                  </div>
                  <br>
                  <div style="text-align: center">
                  <label>Fotoğraf Yükle</label>
                  </div>
                  <div style="text-align: center">
                
                          <span>
                            <button class="btn btn-primary btn-icon-text" type="button"><i class="mdi mdi-upload btn-icon-prepend"></i>Yükle</button>
                          </span>
                    
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
                    <hr size="10" color="#fff">
                    
                    <form class="forms-sample">
                      <div class="form-group">
                        <h4 for="exampleInputName1">Başlık</h4>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                      </div>
                      <div class="form-group">
                        <h4 for="exampleTextarea1">Yazı</h4>
                        <textarea class="form-control" id="exampleTextarea1" rows="7"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- end about text -->

          </div>
          <!-- content-wrapper ends -->

<?php include 'footer.php'; ?>