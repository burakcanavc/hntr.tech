<?php
require 'header.php';

/* Veritabanı tablo çağırma işlemi */

$db=new Database();

$myQuery=$db->TableOperations("SELECT * FROM tbl_comments",PDO::FETCH_ASSOC);

/* İşlem sonu */

?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
           
          <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h3  style="text-align:center;" class="card-title">Yorumlar</h3>
                  
                  <hr size="10" color="#fff">
                  
                    <div class="table-responsive">
                    <button id="show" style="float: right;" type="button" class="btn btn-primary btn-fw"><a>Yorumları Görüntüle/Kapat</a></button>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>İsim</th>
                            <th>Email</th>
                            <th>Tarih</th>
                            <th>Yorum Yapılan Yazı</th>
                            <th>Yorum</th>
                            <th>Kaldır</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach($myQuery as $items){
                        ?>
                        <tr>
                            <td><?=$items["name"]; ?></td>
                            <td><?=$items["mail"]; ?></td>
                            <td><?=$items["time"]; ?></td>
                            <td><?=$items["text_title"]; ?></td>
                            <td><p style="display: none"><?=$items["text"];?></p></td>
                        <td><div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kaldır</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <h6 class="dropdown-header">Emin misiniz?</h6>
                        <a href="comment-delete.php?id=<?=$items["id"]; ?>" class="dropdown-item"><button type="button" class="btn btn-danger btn-fw">Evet</button></a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item"><button type="button" class="btn btn-warning btn-fw">Hayır</button></a>
                        </div>
                      </div></td>
                    </tr>
                          
                          <?php } ?>
                        <script>
                        $( "#show" ).click(function() {
                        $( "p" ).toggle();
                        });
                        </script>
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