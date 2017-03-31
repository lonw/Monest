<?php
  require_once 'core/init.php';
  include 'includes/header.php';
  include 'includes/navigation.php';
  include 'includes/headerpartial4.php';

      $query = mysql_query("SELECT * FROM honor where lang = 1");

 ?>



<div class="container-fuild">
	<div class="content"><br>
		<div class="container" style="background-color:white;color:black;">
			<div class="row">


		<div class="col-md-12">

      <hr><h3 id="responsivelogotext" style="color:grey;"> &nbsp;Home  / <a href="aboutus.php" style="color:black;">About</a> / Honor</h3><hr>
      <center><div class="fotorama"
           data-autoplay="true" data-nav="thumbs" data-allowfullscreen="true"  data-width="800" data-height="700">
        <img src="images/honor/1.jpg" width="600" height="500" alt=""data-caption="1. CEO of Monest and Former Prime Minister">
        <img src="images/honor/2.jpg" width="600" height="500" data-caption="2. Monest Awarded : Honors of Centum">
        <img src="images/honor/3.jpg" width="600" height="500" data-caption="3. TD Tara Present at Monest">
        <img src="images/honor/4.jpg" width="600" height="500" data-caption="4. a photo of CEO of Monest and Former Prime Minister">
      </div></center>
      <?php  $data = mysql_fetch_array($query); ?>
      <?php echo $data['content']; ?>
			  <p>
			    <a href="aboutus.php" class="btn btn-success btn-large pull-right">
			      back
			    </a>
			  </p>

			<br><br>
		</div>

		</div>
		</div>
	</div>
</div>


<!-- content End -->
<?php
  include 'includes/footer.php';
 ?>
