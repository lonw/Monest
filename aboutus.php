<?php
  require_once 'core/init.php';
  include 'includes/header.php';
  include 'includes/navigation.php';
  include 'includes/headerpartial4.php';
  $query = mysql_query("SELECT * FROM home_intro");

 ?>



<div class="container-fuild">
	<div class="content"><br>
		<div class="container" style="background-color:white;color:black;">
			<div class="row">
				<hr><h3 id="responsivelogotext" style="color:grey;">&nbsp <a href="home.php" style="color:black;">首页</a>  / 关于我们</h3><hr>
        <div class="col-md-12">

            <div class="col-md-3 col-sm-6">
            <h4 style="color:grey;">公司简介</h4><br>
            <p>
              华旗核心理念: 稳健长久... <br><br>
    			    <a href="profile.php" class="btn btn-success btn-sm">
    			      了解更多
    			    </a>
    			  </p>

          </div>
            <div class="col-md-3 col-sm-6">
            <h4 style="color:grey;">核心团队</h4><br>
            <p>
              华旗集团主要成员，包括... <br><br>
    			    <a href="members.php" class="btn btn-success btn-sm">
    			      了解更多
    			    </a>
    			  </p>
          </div>
          <div class="col-md-3 col-sm-6">
          <h4 style="color:grey;">组织架构</h4><br>
          <p>
            华旗集团专业团队，为您定制... <br><br>
  			    <a href="team.php" class="btn btn-success btn-sm">
  			      了解更多
  			    </a>
  			  </p>
        </div>
        <div class="col-md-3 col-sm-6">
        <h4 style="color:grey;">华旗荣誉</h4><br>
        <p>
          华旗集团辉煌荣誉... <br><br>
			    <a href="honor.php" class="btn btn-success btn-sm">
			      了解更多
			    </a>
			  </p>
      </div>
				<div align="col-md-12">
					<iframe
			   width="100%"
			   height="400"
			   src="https://www.youtube.com/embed/hNLMWBNuFn0?rel=0&amp;showinfo=0"
			   frameborder="0"
			   allowfullscreen>
			</iframe>
				</div>

		<div class="col-md-12">
			<div class="hero-unit">
				<h1 style="color:grey;">华旗金融 - 关于我们</h1>
				<hr>
        <?php  $data = mysql_fetch_array($query); ?>
        <?php echo $data['content']; ?>

					<hr>
			  <p>
			    <a href="home.php" class="btn btn-success btn-large pull-right">
			      返回
			    </a>
			  </p>
			</div>
			<br><br>
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
