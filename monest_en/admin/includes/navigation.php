<!-- Top Nav Bar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> 华旗集团</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="dashboard.php">Dashboard</a></li>
        <!-- Menu item -->
        <li><a href="categories.php">Navigation</a></li>
        <li><a href="loan.php">Finance</a></li>
        <!-- <li><a href="products.php">文章管理</a></li> -->
        <li><a href="home_intro.php">Introduction</a></li>
        <li><a href="home_honor.php">Honors</a></li>
        <li><a href="job_center.php">Job Center</a></li>
        <?php if (has_permission('admin')): ?>
        <li><a href="users.php">Admin</a></li>
        <?php endif; ?>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello <?php echo $user_data['fname'];?>!
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="change_password.php">Change Password</a></li><li><a href="http://monest.ca/admin/home.php">中文</a></li>
        </ul>
        </li>
        </ul>
      </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
  </div>
</div>
</nav>
