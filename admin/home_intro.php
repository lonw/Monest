<?php
include('../inc/config.php');
include('check-login.php');
include 'includes/head.php';
include 'includes/navigation.php';
$query = mysql_query("SELECT * FROM home_intro where lang = 0");

if(isset($_GET['submit'])){

  $content = ((isset($_POST['desc']) && !empty($_POST['desc']))?$_POST['desc']:'');

  $query = mysql_query("UPDATE home_intro SET content='$content' where lang = 0");

  if ($query) {

      $url="home_intro.php";
    //redirect to the page
        echo '<script>window.location = "'.$url.'";</script>';
  }
}
?>
<h2 class="text-center">介绍首页</h2><hr>
<!-- home Form -->
<div class="text-center">

</div> <hr>
<div class="row-fluid">

  <div class="span12" id="content">
      <div class="row-fluid">
          <!-- block -->
          <div class="block">

              <div class="block-content collapse in">
                    <form action="home_intro.php?submit" method="post">
                    <?php  $data = mysql_fetch_array($query); ?>

                      <textarea class="ckeditor" rows="20" id="ckeditor_full" name="desc"><?php echo $data['content']; ?></textarea>

                <br>
                      <button class="btn btn-primary">Submit</button>
                      </form>
                  </div>
          </div>
          <!-- /block -->
      </div>
  </div>

</div>
</div>
<?php include 'includes/footer.php'; ?>
