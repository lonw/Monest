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
    <?php while($approval = mysql_fetch_assoc($showUser)): ?>
      <div class="form-group col-md-6">
        <label for="id">ID :</label>
          <label for="id" style="text-decoration: underline;"><?php echo $approval['id'];?></label>
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email:</label>
          <label for="email" style="text-decoration: underline;"><?php echo $approval['email'];?></label>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Full name:</label>
          <label for="name" style="text-decoration: underline;"><?php echo $approval['name'];?></label>
      </div>
      <div class="form-group col-md-6">
        <label for="phone">Phone #:</label>
          <label for="phone" style="text-decoration: underline;"><?php echo $approval['phone'];?></label>
      </div>
      <div class="form-group col-md-6">
        <label for="content">Content:</label>
          <label for="content" style="text-decoration: underline;"><?php echo $approval['content'];?></label>
      </div>

      <div class="form-group col-md-6">
        <label for="attachment" >Attachment:</label><a class="btn btn-success btn-sm" href="../<?php echo $approval['attachment'];?>">Download</a>
      </div>
   <?php  endwhile; ?>
    <div class="form-group col-md-6 text-right" style="margin-top:25px;">
      <a href="home.php" class="btn btn-default">返回</a>

    </div>
  </form>
  <?php
}else {
  //get brands from database
  $sql = "SELECT * FROM feedback ORDER BY name";
  $results = mysql_query($sql);
  $errors = array();


  //Delete home
  if(isset($_GET['delete']) && !empty($_GET['delete'])){
    $delete_id = (int)$_GET['delete'];
    $delete_id = sanitize($delete_id);
    mysql_query("DELETE FROM feedback WHERE id = '$delete_id'");
    $url="home.php";
  //redirect to the page
    echo '<script>window.location = "'.$url.'";</script>';
  }

  //If add form is submitted
  if(isset($_POST['add_submit'])){
    $name = sanitize($_POST['name']);
      //Check if name is blank
    if($_POST['name'] == ''){
      $errors[] .='You must enter a name!';
    }
    //Check if name exists in database
    $sql = "SELECT * FROM feedback WHERE name = '$name'";
    if(isset($_GET['edit'])){
      $sql = "SELECT * FROM feedback WHERE name = '$name' AND id != '$edit_id'";
    }
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    if($count > 0){
      $errors[] .= $name.' Already exists. Please Choose another name ...';
    }
    //display errors
    if (!empty($errors)) {
      echo display_errors($errors);
    }else {
      //Add brand to database
      $sql = "INSERT INTO feedback (name) VALUES ('$name')";
      if(isset($_GET['edit'])){
        $sql = "UPDATE feedback SET name = '$name' WHERE id = '$edit_id'";
      }
      mysql_query($sql);
      $url="home.php";
    //redirect to the page
      echo '<script>window.location = "'.$url.'";</script>';
    }
  }
?>
<h2 class="text-center">意见箱</h2><hr>
<!-- home Form -->
<div class="text-center">

</div> <hr>
<table class="table table-bordered table-striped table-auto table-condensed">
  <thead>
    <th></th><th>客户姓名</th><th></th>
  </thead>
  <tbody>
    <?php while($name = mysql_fetch_assoc($results)): ?>
    <tr>
      <td>

        <a href="home.php?view=<?php echo  $name['id']; ?> " class='btn btn-xs btn-default'><span class="glyphicon glyphicon-search"></span></a></td>
      <td> <?php echo  $name['name']; ?> </td>
      <td><a href="home.php?delete=<?php echo  $name['id']; ?>" class='btn btn-xs btn-default'><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>
<?php } include 'includes/footer.php'; ?>
