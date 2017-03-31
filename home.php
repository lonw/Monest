<?php
  require_once 'core/init.php';
  include 'includes/header.php';
  include 'includes/navigation.php';
  include 'includes/headerfull.php';

  $query = mysql_query("SELECT * FROM home_intro");

 ?>

<!-- Our Services Start-->
<div class="container-fuild">
		<div class="content">
			<div class="container">
			<div class="row wrap">
				<ul class="ca-menu" style="padding-left: 0px;">
						<div class="col-lg-3 col-md-3 col-xs-12" align="center"><li>
								<a href="solution1.php">
										<span class="ca-icon">I</span>
										<div class="ca-content">
												<h2 class="ca-main">华旗金融</h2>
												<h3 class="ca-sub">专注房地产金融服务</h3>
										</div>
								</a>
						</li></div><div class="col-lg-3 col-md-3 col-xs-12" align="center">
						<li>
								<a href="aboutus.php">
										<span class="ca-icon">E</span>
										<div class="ca-content">
												<h2 class="ca-main">华旗荣誉</h2>
												<h3 class="ca-sub">华旗集团金融业界荣誉</h3>
										</div>
								</a>
						</li></div><div class="col-lg-3 col-md-3 col-xs-12" align="center">
						<li>
								<a href="solution3.php">
										<span class="ca-icon">$</span>
										<div class="ca-content">
												<h2 class="ca-main">风险管控</h2>
												<h3 class="ca-sub">华旗集团金融风险管控</h3>
										</div>
								</a>
						</li></div><div class="col-lg-3 col-md-3 col-xs-12" align="center">
						<li>
								<a href="solution2.php">
										<span class="ca-icon">Ý</span>
										<div class="ca-content">
												<h2 class="ca-main">华旗教育</h2>
												<h3 class="ca-sub">华旗教育服务产业及培训</h3>
										</div>
								</a>
						</li></div>
				</ul>

			</div>
      <br>
		</div>
		</div>
</div>
<!-- Our Services End-->
<!-- content start -->
<div class="color-content">
  <div class="container" style="color: white;">
    <h1>华旗简介</h1>
    <?php  $data = mysql_fetch_array($query); ?>
    <?php echo $data['content']; ?>

    <br><br>
    </div>
  </div>

<div class="container" style="background-color:white;color:black;">

    <p class="big">


                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden; visibility: hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('css/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;">
                        <div style="display: none;">
                            <img data-u="image" src="css/img/005.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="css/img/006.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="css/img/011.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="css/img/013.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="css/img/014.jpg" />
                        </div>

                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
                        <!-- bullet navigator item prototype -->
                        <div data-u="prototype" style="width:21px;height:21px;">
                            <div data-u="numbertemplate"></div>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
                </div>

                      <h2>华旗荣誉</h2>
                      <br>
                                <ul style="list-style:disc;">
                                  <a href="honor.php" style="color:black;"><li>华旗金融成立15年以来，投资回报率平 均高达8%以上，无任何坏账记录 </li></a>
                                  <a href="honor.php" style="color:black;"><li>华旗金融自2006年起，连续10年在 Centum集团内获得业绩销售冠军 </li></a>
                                  <a href="honor.php" style="color:black;"><li>华旗金融CEO Susan Wang 女士荣获 加拿大女皇60年千禧勋章，以及安省5 年志愿者奖 </li></a>
                                  <a href="honor.php" style="color:black;"><li>截止目前，华旗金融各项投资融资项目 资产管理总额已达到十余亿加币</li></a>
                                </ul>
                                <a href="honor.php" class="btn btn-success btn-large pull-right">
                                  更多
                                </a>
    </p>
    <br><br>
  </div>
</div>

<!-- content End -->
<?php
  include 'includes/footer.php';
 ?>
