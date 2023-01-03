<?php
require 'header.php';

/* Veritabanı tablo çağırma işlemi */

$db=new Database();

$myQuery=$db->TableOperations("SELECT * FROM tbl_messages",PDO::FETCH_ASSOC);

/* İşlem sonu */

?>

<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
           
          <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h3  style="text-align:center;" class="card-title">Mesajlar</h3>
                  
                  <hr size="10" color="#fff">
                  
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>İsim</th>
                            <th>Email</th>
                            <th>Tarih</th>
                            <th>Konu</th>
                            <th>Mesaj</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach($myQuery as $items){
                        ?>
                        <tr>
                            <td><?=$items["name"] ?></td>
                            <td><?=$items["mail"] ?></td>
                            <td><?=$items["time"] ?></td>
                            <td><?=$items["title"] ?></td>
                            <td><?=$items["text"] ?></td>
                            <td><label class="badge badge-warning">Görüntüle</label></td>
                          </tr>
                          
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
          <!-- content-wrapper ends -->

<?php include 'footer.php'; ?>