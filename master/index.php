     <?php
     require 'header.php';

/* Session kontrol işlemi */

$myIP=$_SERVER["REMOTE_ADDR"];
$myBrowser=$_SERVER["HTTP_USER_AGENT"];
if(isset($_SESSION["LogedIn"]) && $_SESSION["LogedIn"] === true && $myIP ==
$_SESSION["LoginIP"] && $_SESSION["userAgent"] == $myBrowser){
  return "Başarılı";
}else{
    go("logout.php");
}

/* İşlem sonu */
     
 /* Veritabanı tablo çağırma işlemi */

$db=new Database();
$blogSayisi=$db->getColumn("SELECT COUNT(*) FROM tbl_blog");
$mesajSayisi=$db->getColumn("SELECT COUNT(*) FROM tbl_messages");
$yorumSayisi=$db->getColumn("SELECT COUNT(*) FROM tbl_comments");
$blogYazisi=$db->TableOperations("SELECT * FROM tbl_blog",PDO::FETCH_ASSOC);
$myNote=$db->getRow("Call sp_Note()");

/* İşlem sonu */

/* Not update işlemi */

if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['note_submit'])){

    $not = security("not");
    
    $update=$db->Update('UPDATE tbl_note SET text=?',array($not));
    
    if($update){
    
      echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/index.php">';
    
     }
    
    }/* İşlem sonu */
      ?>
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h2 class="mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;∞</h2>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-warning">
                        <a href="" style="color:#ffab00;"><span class="mdi mdi-chart-bar"></span></a>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Günlük Ziyaretçi Sayısı</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$blogSayisi; ?></h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-primary">
                        <a href="blogs.php" style="color:#0090e7;"><span class="mdi mdi-chart-bar"></span></a>
                        </div>
                      </div>
                    </div>
                    <a href="blogs.php" style="color:#6c7293;"><h6 class="text-muted font-weight-normal">Toplam Blog Yazısı</h6></a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$yorumSayisi; ?></h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                        <a href="comments.php" style="color:#00d25b;"><span class="mdi mdi-chart-bar"></span></a>
                        </div>
                      </div>
                    </div>
                    <a href="comments.php" style="color:#6c7293;"><h6 class="text-muted font-weight-normal">Toplam Yorum Sayısı</h6></a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$mesajSayisi; ?></h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                        <a href="messages.php" style="color:#fc424a;"><span class="mdi mdi-chart-bar"></span></a>
                        </div>
                      </div>
                    </div>
                    <a href="messages.php" style="color:#6c7293;"><h6 class="text-muted font-weight-normal">Toplam Mesaj Sayısı</h6></a>
                  </div>
                </div>
              </div>
            </div>

<!--about text -->
<div class="row">
           <div class="col-md-12 grid-margin stretch-card">

        <div class="card">

        <div class="card-body">

        <div class="form-group">
        <div style="text-align: center">

        
            <h3  style="text-align:center;" class="card-title">Notlar</h3>

    

    

    <form class="forms-sample" method="POST">

      <div class="form-group">  

        <textarea name="not" class="form-control" id="exampleTextarea1" rows="7"><?php echo $myNote->text; ?></textarea>

      </div>

      <div style="text-align:center;">

      <button name="note_submit" type="submit" class="btn btn-info btn-fw">Kaydet</button>

      <button class="btn btn-dark btn-fw">İptal</button>

      </div>

    </form>

  </div>

</div>
</div>
</div>

</div>

</div>

<!-- end about text -->

            <div class="row">
             <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                    <a href="blogs.php" style="color:#fff;" ><h4 class="card-title mb-1">Blog Yazıları</h4></a>
                      <p class="text-muted mb-1">Tarih ve Etiket</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                        <?php 
                         foreach($blogYazisi as $items){
                        ?>
                        <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                              <a href="blog-edit.php?id=<?=$items["id"]; ?>" style="color:#fff;"><i class="mdi mdi-blogger"></i></a>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject"><a href="blog-edit.php?id=<?=$items["id"]; ?>" style="color:#fff;" ><?=$items["title"]; ?></a></h6>
                                <p class="text-muted mb-0"><?=strip_tags(substr($items["text"], 0, 100));?>...</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted"><?=$items["date"]; ?></p>
                                <p class="text-muted mb-0"><?=$items["tag1"]; ?> <?=$items["tag2"]; ?> <?=$items["tag3"]; ?></p>
                              </div>
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            
            
          </div>
          <!-- content-wrapper ends -->
          <?php include 'footer.php' ?>