<?php
require 'header.php';

/* Veritabanına bağlanma işlemi */

$db=new Database();

/* İşlem sonu */



/* Blog yazısı insert işlemi */

if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['blog_submit'])){

  $takeFile=$_FILES["myFile"];
  $fileName=$takeFile["name"];
  $fileTempName=$takeFile["tmp_name"];
  $myPath="../images/".$fileName;

if(move_uploaded_file($fileTempName, $myPath)){
  
  $img = $fileName;

  $baslik = security("baslik");

  $yazi = $_POST["yazi"];

  $etiket1 = security("etiket1");

  $etiket2 = security("etiket2");

  $etiket3 = security("etiket3");

  $insert=$db->Insert('INSERT INTO `tbl_blog` SET img=?, title=?, text=?, tag1=?, tag2=?, tag3=?',array($img,$baslik,$yazi,$etiket1,$etiket2,$etiket3));

  $yaziId = $db->getRow('SELECT * FROM tbl_blog WHERE title=?',array($baslik));

  if($insert){
  
    echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/blog-edit.php?id='.$yaziId->id.'">';

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

                  <h3 style="text-align:center; " class="card-title">Blog Fotoğraf</h3>

                

                  <br>

                  <div style="text-align: center">

                  <div class="kabuk"></div>
                  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
   <script type="text/javascript">
   function verioku(){      
      $('.kabuk').show();
      $('.kabuk').html('');
      var adet=document.getElementById ("resim").files.length;
      
      for(i=0;i<adet;i++){
         var resim = document.getElementById('resim').files[i];
         var verioku=new FileReader();
         verioku.onload=function(e) {
            var resimverioku= e.target.result;
            $('.kabuk').append('<img src="'+resimverioku+'" width="50%"/>');
         };
         verioku.readAsDataURL(resim);
      }
   };
   </script>
                  </div>

                  <br>
                  <br>
                  <br>
                  <div style="text-align: center">
              
                          <form class="forms-sample" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                      
                    <input type="file" id="resim" multiple onChange="verioku()" name="myFile" value="Seç">

                      </div>
                      </div>
              <!-- end about image -->
                <br>
                <hr size="10" color="#fff">
                <br>
              <!--about text -->

                    <h3  style="text-align:center;" class="card-title">Blog Yazı</h3>

                        <h4 for="exampleInputName1">Başlık</h4>

                        <input type="text" name="baslik" class="form-control" id="exampleInputName1" placeholder="">

                      </div>

                      <div class="form-group">

                      <h4 for="exampleTextarea1">Yazı</h4>

                        <textarea id="yazi" name="yazi" class="form-control" rows="7"></textarea>

                      </div>
                      <br>
                      <hr size="10" color="#fff">
                      <br>
                    <div class="form-group">
                      <h4 for="exampleInputName1">Etiket-1</h4>

                      <input type="text" name="etiket1" class="form-control" id="exampleInputName1" placeholder="">

                    </div>
                    <div class="form-group">
                      <h4 for="exampleInputName1">Etiket-2</h4>

                      <input type="text" name="etiket2" class="form-control" id="exampleInputName1" placeholder="">

                    </div>
                    <div class="form-group">
                      <h4 for="exampleInputName1">Etiket-3</h4>

                      <input type="text" name="etiket3" class="form-control" id="exampleInputName1" placeholder="">

                    </div>
                   
                      <div style="text-align:center;">

                      <button type="submit" name="blog_submit" class="btn btn-primary mr-2">Kaydet</button>

                      <button class="btn btn-dark">İptal</button>

                      </div>

                    </form>

                  </div>

                </div>

              </div>

              <!-- end about text -->



          </div>

          <!-- content-wrapper ends -->

<script> CKEDITOR.replace('yazi');</script>

<?php include 'footer.php'; ?>