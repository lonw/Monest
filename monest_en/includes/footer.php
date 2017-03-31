
<div class="color-content" style="color:white;">
    <div class="container" style="text-align:center;">
      <div class="row">
      <br>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <h5 class="pull-left">HAVE QUESTIONS?<span style="color: #ffffff;">  ASK A SPECIALIST?</span></h5>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4"><h5>+1 416-855-4565</h5></div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <h5 class="pull-right lead">Weekday <span style="color: #ffffff;">From <strong>9:00</strong> am to <strong>5:50</strong> pm</span></h5>
      </div>
    </div>
      </div>

  <div>&nbsp;</div>
  </div>
<!-- Footer Start -->
<footer class="footer">

<div class="container">
  <div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<h4>Follow Us</h4>
<ul id="horizontal-list" style="padding-left: 0px;">
  <li>
  <a class="btn btn-social-icon btn-lg btn-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmonest.ca%2Fhome.php&amp;src=sdkpreparse"><span class="fa fa-facebook"></span></a></li>
<li>
<a class="btn btn-social-icon btn-lg btn-linkedin"><span class="fa fa-linkedin"></span></a>
</li>
<li>
  <a class="btn btn-social-icon btn-lg btn-twitter" href="https://twitter.com/Monest_Susan"><span class="fa fa-twitter"></span></a>
</li>
<li>
  <a class="btn btn-social-icon btn-lg btn-tumblr" href="https://www.monest.ca/home.php"><span class="fa fa-tumblr"></span></a>
<script id="tumblr-js" async src="https://assets.tumblr.com/share-button.js"></script>

</li>
<li>
  <a class="btn btn-social-icon btn-lg btn-flickr"><span class="fa fa-flickr"></span></a>
</li>
</ul>
  <div id="footer-text" class="footer-text"><a title="Privacy Policy">© <?= date("Y"); ?>
  Privacy Policy</a>
  </div></div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div id="text-6"><h4>Address </h4> <div class="textwidget"><address class="address-2">
<span>Unit #1008, 250 Consumers Road</span>
<span>Toronto ON Canada, M2J 4V6</span>
<span>Phone#: +1 416-855-4565</span>
<span><a href="mailto:susanwang@monest.ca">susanwang@monest.ca</a></span>
</address></div>
</div> </div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div id="text-10"><h4>Support Menu</h4> <div> <ul>
<li><a href="#">Download Forms</a></li>
<li><a href="members.php">Reservation</a></li>
<li><a href="contact.php">Technical difficulties</a></li>
<li><a href="admin/">Control Panel</a></li>
</ul></div>
</div> </div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div id="text-11"><h4>About Us</h4> <div><ul>
<li><a href="profile.php">Profile</a></li>
<li><a href="members.php">Group</a></li>
<li><a href="team.php">Organization</a></li>
<li><a href="honor.php">Honors</a></li>
</ul></div>
</div> </div>

<div class="row copyright">
</div>
</div>
</div>
</footer>
<!-- footer End -->
<!-- jQuery, -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/script.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- Fotorama -->
<script src="fotorama/fotorama.js"></script>

<!-- <script type="text/javascript">
  $(document).ready(function()
                    {
                    $("#add_fields_placeholder").change(function()
          {
              if($(this).val() == "No")
          {
              $("#basicfield").show();
              $("#basic").attr("required", "required");


          }
          else
          {
              $("#basicfield").hide();
              $("#basic").removeAttr("required", "required");

          }
              });
              $("#basicfield").hide();
              $("#basic").removeAttr("required", "required");

  });

  $(document).ready(function()
                    {
                    $("#add_jobs_placeholder").change(function()
          {
              if($(this).val() == "No")
          {
              $("#jobfield1").show();
              $("#jobfield2").show();
              $("#jobfield3").show();
              $("#job1").attr("required", "required");
              $("#job2").attr("required", "required");
              $("#job3").attr("required", "required");

          }
          else
          {
              $("#jobfield1").hide();
              $("#jobfield2").hide();
              $("#jobfield3").hide();
              $("#job1").removeAttr("required", "required");
              $("#job2").removeAttr("required", "required");
              $("#job3").removeAttr("required", "required");

          }
              });

              $("#jobfield1").hide();
              $("#jobfield2").hide();
              $("#jobfield3").hide();
              $("#job1").removeAttr("required", "required");
              $("#job2").removeAttr("required", "required");
              $("#job3").removeAttr("required", "required");

  });


</script> -->
<script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>
<!-- use jssor.slider-21.1.5.debug.js instead for debug -->
<script>
    jQuery(document).ready(function ($) {

        var jssor_1_options = {
          $AutoPlay: true,
          $AutoPlaySteps: 4,
          $SlideDuration: 160,
          $SlideWidth: 200,
          $SlideSpacing: 3,
          $Cols: 4,
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,
            $Steps: 4
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $SpacingX: 1,
            $SpacingY: 1
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 809);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>


</body>
</html>
