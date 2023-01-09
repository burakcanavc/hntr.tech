<?php
require 'header.php';

/* Veritabanı tablo çağırma işlemi */

$db=new Database();

$blogYazisi=$db->TableOperations("SELECT * FROM tbl_blog",PDO::FETCH_ASSOC);

/* İşlem sonu */

?>
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
           
          <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h3  style="text-align:center;" class="card-title">Blog Yazıları</h3>
                  
                  <hr size="10" color="#fff">
                  
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Başlık</th>
                            <th>Etiketler</th>
                            <th>Tarih</th>
                            <th>Görüntüle/Düzenle</th>
                            <th>Kaldır</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach($blogYazisi as $items){
                        ?>
                        <tr>
                            <td><?=$items["title"]; ?></td>
                            <td><?=$items["tag1"]; ?> - <?=$items["tag2"]; ?> - <?=$items["tag3"]; ?></td>
                            <td><?=$items["date"]; ?></td>
                            <td><a href="blog-edit.php?id=<?=$items["id"]; ?>"><button type="button" class="btn btn-primary btn-fw">Görüntüle/Düzenle</button></a>
                          </td>
                      <td><div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kaldır</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <h6 class="dropdown-header">Emin misiniz?</h6>
                        <a href="blog-delete.php?id=<?=$items["id"]; ?>" class="dropdown-item"><button type="button" class="btn btn-danger btn-fw">Evet</button></a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item"><button type="button" class="btn btn-warning btn-fw">Hayır</button></a>
                        </div>
                      </div></td>
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