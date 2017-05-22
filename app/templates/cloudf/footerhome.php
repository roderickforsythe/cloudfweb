<<<<<<< HEAD
<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2017 CloudF Consulting, LLC</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="https://twitter.com/cloudfconsult"><i class="icon-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/b/113138936931086559757/"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="https://www.youtube.com/channel/UC98a4Bb15owmby2sJdcUnJg"><i class="icon-youtube"></i></a></li>
                    <!-- <li><a href="#"><i class="icon-github-alt"></i></a></ -->li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<?php
helpers\assets::js(helpers\url::template_path() .'js/vendor/jquery-1.9.1.min.js', 'cloudf');
helpers\assets::js(helpers\url::template_path() .'js/vendor/bootstrap.min.js', 'cloudf');
helpers\assets::js(helpers\url::template_path() .'js/main.js', 'cloudf');


helpers\assets::js(helpers\url::template_path() .'js/jquery.ba-cond.min.js', 'cloudf');
helpers\assets::js(helpers\url::template_path() .'js/jquery.slitslider.js', 'cloudf');

?>


<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97617532-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3369083.js"></script>
<!-- End of HubSpot Embed Code -->

</body>


</html>