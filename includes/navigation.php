<?php
$pquery = mysql_query("SELECT * FROM categories WHERE parent = 0 and lang = 0");
ob_start();
?>
<!-- Naviagation Start -->
<div class="top-header">
  <div class="container">
    <div class="row">

  <div id="topheader" class="pull-left">
    <a href="#" class="btn btn-lg" style="color: #fff;">
          <span class="glyphicon glyphicon-tag"></span>
          &nbsp;Unit #1008, 250 Consumers Rd, Toronto
        </a><a href="#" class="btn btn-lg" style="color: #fff;"><span class="glyphicon glyphicon-headphones"></span>&nbsp;416-855-4565</a>
  </div>

  <div id="topheader" class="pull-right">
  <a class="btn btn-social-icon btn-lg btn-twitter" href="https://twitter.com/Monest_Susan"><span class="fa fa-twitter"></span></a>
  <a class="btn btn-social-icon btn-lg btn-linkedin"><span class="fa fa-linkedin"></span></a>
  <a class="btn btn-social-icon btn-lg btn-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmonest.ca%2Fhome.php&amp;src=sdkpreparse"><span class="fa fa-facebook"></span></a>
  <a class="btn btn-social-icon btn-lg btn-flickr"><span class="fa fa-flickr"></span></a>
  &nbsp;&nbsp;&nbsp;<a href="monest_en/home.php"><img src="images/bg/en.png" alt="" /> EN</a>
</div>
</div>

</div>
</div>
<nav>
<!-- Top Header's Bar End-->
<div class="header-wrap">
<div class="header">
<div class="logo_text">
<a href="home.php"><img src="images/logo.png" id="logo" style="padding-left: 15px;padding-right: 15px;height: 60px;margin-bottom: 10px;margin-top: -6px;"></a>
<b id="responsivelogotext"  style="color:white;">华旗金融</b>
<ul class="menu pull-right" style="padding-top: 25px;">

<li class="dropdown li logo">
    <i class=" dropdown-toggle" data-toggle="dropdown"><span class="hidden-lg">选项<b class="caret"></b></span></i>
    <!-- Small Menu -->
  <ul class="dropdown-menu menu" style="margin-top: 0px;opacity: 1;left: -10px;">
    <li class="li  "><a href="home.php" class="no-u"><u>首页</u></a></li>
    <?php while($parent = mysql_fetch_assoc($pquery)) :?>
          <li class="li  "><a href="<?php echo $parent['link'];?>" class="no-u"><u><?php echo $parent['category'];?></u></a></li>
      <?php endwhile; ?>
    <li class="li  "><a href="aboutus.php" class="no-u"><u>关于我们</u></a></li>
    <li class="li  "><a href="contact.php" class="no-u"><u>联系我们</u></a></li></ul>
  <!-- Small Menu -->
</li>
<li class="li visited  ">
<a href="home.php" class="no-u"><u>首页</u></a>
</li>
<?php
$pquery = mysql_query("SELECT * FROM categories WHERE parent = 0 and lang = 0");
?>
  <?php while($parent = mysql_fetch_assoc($pquery)) :?>
    <?php
    $parent_id = $parent['id'];

    $cquery = mysql_query("SELECT * FROM categories WHERE parent = '$parent_id'");
    ?>
<li class="dropdown li visited">
<a href="<?php echo $parent['link'];?>" class="dropdown-toggle no-u"><u><?php echo $parent['category'];?></u><b class="caret"></b></a>
<ul class="dropdown-menu menu" >
  <?php while ($child = mysql_fetch_assoc($cquery)) : ?>
  <li class="li visited"><a href="<?php echo $child['link'];?>" class="no-u"><u><?php echo $child['category']; ?></u></a></li>
  <?php endwhile; ?>
</ul>
</li>
 <?php endwhile; ?>

<li class="dropdown li visited  ">
<a href="aboutus.php" class="dropdown-toggle no-u"><u>关于我们</u><b class="caret"></b></a>

    <ul class="dropdown-menu menu" >
      <li class="li visited"><a href="profile.php" class="no-u"><u>公司简介</u></a></li>
      <li class="li visited"><a href="members.php" class="no-u"><u>核心团队</u></a></li>
      <li class="li visited"><a href="team.php" class="no-u"><u>组织架构</u></a></li>
      <li class="li visited"><a href="honor.php" class="no-u"><u>华旗荣誉</u></a></li>
    </ul>
</li>
<li class="dropdown li visited ">
<a href="contact.php" class="no-u"><u>联系我们</u><b class="caret"></b></a>
<ul class="dropdown-menu menu">
  <li class="li visited"><a href="contact.php?hire=1" class="no-u"><u>华旗招聘</u></a></li>
</ul>
</li>

</li>
</ul>
  <p style="font-size:12px;color:white;letter-spacing: 2px;">
    Idea For Investor, Reliable Stability
  </p>

</div>
</div>
</div></nav>
<!-- Naviagation Start -->
