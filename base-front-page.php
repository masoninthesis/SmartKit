<?php get_template_part('templates/head'); ?>
<body class="body-bottom" data-spy="scroll" data-target=".navbar">

  <!--[if lt IE 8]>
    <div class="alert alert-t4tg">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

    <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar') && is_category(podcast) ) {
      get_template_part('templates/header-podcast');
    } else if (current_theme_supports('bootstrap-top-navbar') && !is_page(podcast) ) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  

  <section id="home" class="home jack-things">
    <div class="wrap container" role="document">
      <div class="content row">
      	<div class="col-sm-4 col-sm-offset-2">
          	<img class="art img-responsive" src="http://masonlawlor.com/smartkit/assets/images/graphics/security.png" />
        </div>
        <div class="col-sm-6"> 
          <h2><img class="security-icon" src="http://masonlawlor.com/smartkit/assets/images/security.png" /> Home Security</h2>
		    <ul class="big-list">
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/1-design.png"/> Perimeter Protection</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/2-dev.png"/> Motion Detection</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/3-conversions.png"/> Smoke & CO Detection</li>
	        </ul>
	        <div class="alert alert-t4tg">Starting at <span class="price-security">$34.99</span>/m</div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <button class="btn btn-default btn-lg security-btn">Pre-order <i class="fa fa-chevron-right"></i></button>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>

  <section id="energy" class="highlight home jack-things">
    <div class="wrap container" role="document">
      <div class="content row">
      	<div class="col-sm-4 col-sm-offset-2">
          <img class="art img-responsive" src="http://masonlawlor.com/smartkit/assets/images/graphics/energy.png" />
        </div>
        <div class="col-sm-6">
          <h2><img class="energy-icon" src="http://masonlawlor.com/smartkit/assets/images/energy.png" /> Smart Energy</h2>
          <ul class="big-list">
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/1-design.png"/> Thermostat Control</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/2-dev.png"/> Light Control</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/4-templates.png"/> Energy Saving Schedules</li>
	        </ul>
          <div class="alert alert-t4tg">Starting at <span class="price-energy">$42.99</span>/m</div>
        </div>
      </div>
      <div class="row">
      	<div class="col-sm-12">
          <button class="btn btn-default btn-lg energy-btn">Pre-order  <i class="fa fa-chevron-right"></i></button>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>

  <section id="auto" class="home jack-things">
    <div class="wrap container" role="document">
      <div class="content row">
      <div class="col-sm-4 col-sm-offset-2">
          <img class="art img-responsive" src="http://masonlawlor.com/smartkit/assets/images/graphics/auto.png" />
        </div>
        <div class="col-sm-6">
          <h2><img class="auto-icon" src="http://masonlawlor.com/smartkit/assets/images/automation.png" /> Home Automation</h2>
          <ul class="big-list">
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/1-design.png"/> Door Lock Control</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/3-conversions.png"/> Mood Presets</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/4-templates.png"/> Wifi Surveillance</li>
	        </ul>
          <div class="alert alert-t4tg">Starting at <span class="price-auto">$56.99</span>/m</div>
        </div>
      </div>
      <div class="row">
      	<div class="col-sm-12">
          <button class="btn btn-default btn-lg auto-btn">Pre-order  <i class="fa fa-chevron-right"></i></button>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>
  
<hr>
  
  <section id="bottom-cta" class="home">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-12">
	          <h1>The new definition of Smart Home.</h1>
          <h3>Pre-order your <span class="smart-home">SmartKit</span> on Kickstarter</h3>
          <center><button type="button" class="btn btn-default security-btn">Back on Kickstarter</button></center>
          <center><a href="" data-toggle="modal" data-target="#myModal">Virtual Walk-thru: How to pick the right equipment for your home</a></center>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>


  <?php get_template_part('templates/footer'); ?>
  
<!-- pop-up modal -->
<script language="JavaScript">
  <!--
    function _submit_form(frm){
      var email = frm.email.value;
      var valid_email = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
      
      if( valid_email.test( email ) ){
        document.getElementById('before').style.display = 'none';
        document.getElementById('after').style.display = 'block';
        return true;
      } else {
        alert("Invalid email address");
      }
      return false;
    }
//-->
</script>

<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    function showPopup() {
      $('#myModal').modal('show');
    }

    function timeOut() {
      if ($.cookie('foreverjobless') !== '1') {
        setTimeout(function() {
          showPopup();
          jQuery.cookie('foreverjobless', '1', { expires: 7 });
        }, 240000);
      }
    }

    $(document).ready(function () {
      timeOut();
      stickyElement();
    });

</script>

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!--<button type="button" class="close" style="margin-right: 10px;margin-top: 5px;" data-dismiss="modal" aria-hidden="true">&times;</button>-->
          <div class="modal-body">
    			
    			<div class="col-sm-10 col-sm-offset-1 modal-video"><!-- Video -->
				 	<div class="row"> 
					 	<center>
					 		<iframe src="//fast.wistia.net/embed/iframe/6y2igsba97?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
					 		<script src='//fast.wistia.com/static/iframe-api-v1.js'></script>
					 	</center>
					</div>
				</div> <!-- /Video -->
    		</div>
    	<br>	
        <h4 class="optin-h4">stupid bug, buggin me </h4><!-- optin -->
        <h4 class="">Be the first to know when we launch!!</h4><!-- optin -->
	  <div class="row">
	      <div class="top-optin col-sm-offset-3">
	      
	      <!-- Mailchimp -->
			<form class="form-inline" id="before_header" action="//smartk.us8.list-manage.com/subscribe/post?u=99a776394eb3b3549e7c5e53c&amp;id=628848161c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
			<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-primary btn-lg" type="submit" value="Submit" tabindex="501">Subscribe</button>
			
			</form> <!-- /Mailchimp -->
	      </div><!-- /optin -->
		  <br><br>
          </div>
        </div>
      </div>
    </div>  
<!-- /pop-up modal -->
    
	
	</body>
</html>
