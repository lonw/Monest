<?php
include('../inc/config.php');
  include('check-login.php');
  include 'includes/head.php';
  include 'includes/navigation.php';

if (isset($_GET['view'])) {
  $view_id = sanitize($_GET['view']);
  $showUser = mysql_query("SELECT * FROM feedback WHERE id = '$view_id'");
  ?>

  <h2 class="text-center">用户反馈信息</h2><hr>
  <form action="users.php?add=1" method="post" accept-charset="utf-8">
<div class="col-md-12">
    <?php while($approval = mysql_fetch_assoc($showUser)): ?>
    <div class="form-group">
      <label for="id">ID :</label>
        <label for="id" style="text-decoration: underline;"><?php echo $approval['id'];?></label>

    </div>


    <!-- Text input-->
    <div class="form-group">
      <label class="control-label" for="name">Name  :</label>
      <div>
      <input id="name" name="name" type="text" class="form-control input-md" value="<?php echo $approval['name'];?>">
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="control-label" for="phone">Phone # :</label>
      <div>
      <input id="phone" name="phone" type="text"  class="form-control input-md" value="<?php echo $approval['phone'];?>" >

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="control-label" for="email">Email :</label>
      <div>
      <input id="email" name="email" type="email"  class="form-control input-md" value="<?php echo $approval['email'];?>" >
      </div>
    </div>

   <!-- Text input-->
   <div class="form-group">
     <label class="control-label" for="content">Content :</label>
     <div>
     <textarea id="content" name="content" type="text" class="form-control input-md" rows="5" ><?php echo $approval['content'];?></textarea>
     </div>
   </div>
   <div class="form-group col-md-12">
     <label for="attachment" >Attachment:<a class="btn btn-success btn-xs" href="../<?php echo $approval['attachment'];?>">Download</a></label>
   </div>



   <?php  endwhile; ?>
    <div class="form-group col-md-12 text-right" style="margin-top:25px;">
      <a href="javascript:history.go(-1)" class="btn btn-default">返回</a>

    </div>
    </div>
  </form>

  <?php
}else {
  //get brands from database
  $results = mysql_query("SELECT * FROM feedback ORDER BY name");
  $errors = array();


  //Delete home
  if(isset($_GET['delete']) && !empty($_GET['delete'])){
    $delete_id = (int)$_GET['delete'];
    $delete_id = sanitize($delete_id);

    mysql_query("DELETE FROM feedback WHERE id = '$delete_id'");
    $url="dashboard.php";
  //redirect to the page
    echo '<script>window.location = "'.$url.'";</script>';
  }


?>
<h2 class="text-center">意见箱</h2><hr>
<!-- home Form -->
<div class="text-center">
  <!-- <form class="form-inline" action="dashboard.php<?php echo((isset($_GET['edit']))?'?edit='.$edit_id:''); ?>" method="post" accept-charset="utf-8">
    <div class="form-group">
      <?php
      $name_value = '';
      if(isset($_GET['edit'])){
        $name_value = $eName['name'];
      }else{
        if(isset($_POST['name'])){
          $name_value = sanitize($_POST['name']);
        }
      }  ?>
      <label for="name">客户姓名:</label>
      <input type="text" name="name" id="name" class="form-control" value="<?php echo $name_value; ?>">
      <?php if(isset($_GET['edit'])): ?>
        <a href="dashboard.php" class="btn btn-default">取消</a>
      <?php endif; ?>
      <input type="submit" name="add_submit" value="Search" class="btn btn-success">
    </div>
  </form> -->
</div> <hr>
<table class="table table-bordered table-striped table-auto table-condensed">
  <thead>
    <th></th><th>Customer's Name</th><th>Date</th><th></th>
  </thead>
  <tbody>
    <?php while($name = mysql_fetch_assoc($results)): ?>
    <tr>
      <td>
        <a href="dashboard.php?view=<?php echo $name['id']; ?> " class='btn btn-xs btn-default'><span class="glyphicon glyphicon-search"></span></a></td>
      <td> <?php echo $name['name']; ?> </td>
      <td> <?php echo $name['get_date']; ?> </td>
      <td><a href="dashboard.php?delete=<?php echo $name['id']; ?>" class='btn btn-xs btn-default'><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>


<?php } include 'includes/footer.php'; ?>
