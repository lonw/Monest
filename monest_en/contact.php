<?php
  require_once 'core/init.php';
  include 'includes/header.php';
  include 'includes/navigation.php';
  include 'includes/headerpartial5.php';

    $query = mysql_query("SELECT * FROM job_center");
  if (isset($_GET['add'])) {
  $email= ((isset($_POST['email']) && $_POST['email'] != '')?sanitize($_POST['email']):'');
  $name= ((isset($_POST['name']) && $_POST['name'] != '')?sanitize($_POST['name']):'');
  $phone= ((isset($_POST['phone']) && !empty($_POST['phone']))?sanitize($_POST['phone']):'');
  $content= ((isset($_POST['content']) && !empty($_POST['content']))?sanitize($_POST['content']):'');
  $attachment= ((isset($_POST['attachment']) && $_POST['attachment'] != '')?sanitize($_POST['attachment']):'');
  $dbpath = '';
  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["attachment"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  $check = getimagesize($_FILES["attachment"]["tmp_name"]);
  if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
       $uploadOk = 1;
   } else {
      //  echo "File is not an image.";
       $uploadOk = 1;
   }
     // Check if file already exists
  if (file_exists($target_file)) {
      // echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["attachment"]["size"] > 500000) {
      // echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx" ) {
      echo "Sorry, only JPG, JPEG,PDF, DOC, DOCX ,PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      // echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["attachment"]["name"]). " has been uploaded.";

      } else {
          // echo "Sorry, there was an error uploading your file.";
      }
  }
      if ($_POST) {
      // insert into database
      $insertSql = "INSERT INTO feedback(`email`, `name`, `phone`, `content`, `attachment`)
      VALUES ('$email','$name','$phone','$content','$target_file')";
      mysql_query($insertSql);
        echo'<h4 class="bg-success" style="color:green;" align="center">&nbsp;提交成功 - Success</h4>';
      }
}?>

<div class="container-fuild">
  <div class="content">
    <div class='row wrap'>

      <div class="col-md-12" align="center">
				<br>
				<h2 style="color:grey;">&nbsp;CONTACTS</h2><hr>
        <?php include '../googlemap.php' ?>
          <div class="container" align="left" style="background-color:white;color:black;">

           <div class="col-md-4">
             <h3 class="bg-success">CONTACT INFO</h3>
             <h4 style="text-decoration: underline;">Monest headquarter office in Canada Ontario</h4>
               <h6>Unit #1008, 250 Consumers Road. <br>Toronto ON Canada, M2J 4V6</h6>
              <small>Phone#: +1 416-855-4565<br>
              susanwang@monest.ca</small><br>
              <a href="https://www.google.ca/maps/place/250+Consumers+Rd+Limited/@43.7718284,-79.3330425,17z/data=!3m1!4b1!4m5!3m4!1s0x89d4d2592d50433d:0x8f5e872418bfa2fe!8m2!3d43.7718284!4d-79.3308538?ion=1&espv=2&q=Unit+%231008,+250+Consumers+Road+Toronto+ON+Canada,+M2J+4V6&bav=on.2,or.&biw=1430&bih=777&dpr=1&um=1&ie=UTF-8&sa=X&ved=0ahUKEwib19Tlkd_NAhVl04MKHQxxA_IQ_AUIBigB"
              target="_blank" class="btn btn-success btn-xs">
                Get Direction
              </a>

             <h4 style="text-decoration: underline;">>>Offices in Canada<<</h4>
             <p>
               Monest Financial Office is located in <b>Toronto</b>, <b>Ottawa</b>, <b>Mississauga</b>, <b>Waterloo</b>, <b>Edmonton</b>.<br>
             </p>
             <a href="map.php" class="btn btn-success btn-xs">
               Get Direction
             </a>
             <br>
             <h4 style="text-decoration: underline;">>>Offices in China<<</h4>
             <p>
               Monest Financial Office in China is located in <b>Beijing</b>, and <b>Shang Hai</b>.
             </p>
             <a href="map.php" class="btn btn-success btn-xs">
               Get Direction
             </a>
            <br>
             <h3 id="hireme" class="bg-success">JOB CENTER</h3>
             <?php  $data = mysql_fetch_array($query); ?>
             <?php echo $data['position']; ?>

           </div>
           <div class="col-md-8">
             <h2>CONTACT FORM</h2><br>
             <form class="form-horizontal" action="contact.php?add=true" method="post" accept-charset="utf-8" enctype="multipart/form-data">

             <!-- Text input-->
             <div class="form-group">
               <label class="control-label" for="name">Name  :</label>
               <div>
               <input id="name" name="name" type="text" class="form-control input-md" placeholder="Name" required>
               </div>
             </div>

             <!-- Text input-->
             <div class="form-group">
               <label class="control-label" for="phone">Phone # :</label>
               <div>
               <input id="phone" name="phone" type="text"  class="form-control input-md" placeholder="Phone #" required>

               </div>
             </div>

             <!-- Text input-->
             <div class="form-group">
               <label class="control-label" for="email">Email :</label>
               <div>
               <input id="email" name="email" type="email"  class="form-control input-md" placeholder="Email" required>
               </div>
             </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="control-label" for="content">Content :</label>
              <div>
              <textarea id="content" name="content" type="text" class="form-control input-md" rows="5" required></textarea>
              </div>
            </div>

             <div class="form-group">
						    <label for="attachment">Attachment :</label>
						    <input type="file" name="attachment" id="attachment">
						    <p class="help-block">upload here.</p>
						  </div>

             <!-- Button -->
             <div class="form-group">
               <label class="col-md-12 control-label" for="singlebutton"></label>
               <div class="col-md-12">
                 <a href="home.php" class="btn btn-success">back</a>
                 <button type="submit" name="add" class="btn btn-success">submit</button>
                 <button type="reset" class="btn btn-success">clear</button>

               </div>
             </div>
             </form>
						<br><br><br>
           </div>
           </div>
    </div>
    </div>
</div>
</div>

<!-- content End -->
<?php
  include 'includes/footer.php';
 ?>
