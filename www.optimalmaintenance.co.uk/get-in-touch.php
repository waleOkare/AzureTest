<?php
session_start();

require_once 'security.php';


$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66392921-1', 'auto');
  ga('send', 'pageview');

</script>
  
  <title>Get in touch - Optima Asset Maintenance Solutions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no"/>
  <meta name="description" content="Get in touch with us today to discuss your needs - complete the Contact Form below and a member of Our Team will be in touch or give us a call on the numbers below. Alternatively, pay us a visit!" />
  <meta name="keywords" content="Maintenance Engineering Consultants, Aberdeen, Optima Asset Maintenance Solutions" />
  <meta name="author" content="Optima Asset Maintenance Solutions">
  <meta name="robots" content="index, follow">
  <meta name="revisit-after" content="1 days">
  <!-- Maintenance, Engineering, Consultants -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/contact-form.css">
  <link rel="stylesheet" href="css/google-map.css">
  <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="contactStylesheet.css">

  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>

  <!--[if lt IE 9]>
  <html class="lt-ie9">
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script>
  <![endif]-->
	<script type="text/javascript" src="js/jquery.js"></script>
	 <script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/bootstrap-filestyle.js"></script>
	<script type="text/javascript" src="js/TMForm.js"></script>
  
  
  <script src='js/device.min.js'></script>
</head>

<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PGCDGN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PGCDGN');</script>
<!-- End Google Tag Manager -->

<div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
  <header>
    <div id="stuck_container" class="stuck_container">
      <div class="container">
        <div class="brand">
          <h1 class="brand_name">
            <a href="">Maintenance Engineering Consultants <img src="images/logo-icon1.png" alt="Optimal Maintenance Strategies"></a>
          </h1>
        </div>
        <nav class="nav">
          <ul class="sf-menu">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="about-us.html">About Us</a>
              <ul>
                <li>
                   <a href="about-us.html#ourpolicies">Our Policies</a>
                </li>
                <li>
                       <a href="about-us.html#ourpartners">Our Partners</a>
                </li>
      <!--            <a href="meet-our-team.html#ourteam">Our Team</a>
                  <ul>
                    <li>
                      <a href="#">Lorem</a>
                    </li>
                    <li>
                      <a href="#">Dolor</a>
                    </li>
                    <li>
                      <a href="#">Sit amet</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Awards</a>  -->
                </li>
              </ul>
            </li>
            <li>
              <a href="value-added-maintenance-engineering-services.html">Services</a>
            </li>
            <li>
              <a href="maintenance-engineering-redefined.html">Solutions</a>
            </li>
            <li>
              <a href="whats-happening.html">News</a>
            </li>
            <li class="active">
              <a href="get-in-touch.php">Contacts</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!--========================================================
                            CONTENT
  =========================================================-->
  <main>
    <section class="well01">
      <div class="container">
        <h2>how to find us</h2>
        <h3>Get in touch today!</h3>
         <div class="row">
            <address class="addr">
               <div class="row">
				<dt><span class="fa fa-map-marker"></span></dt>
                <dd>4 Granton Place, Aberdeen, AB10 6QT.</dd>
			  </div>
			</address>
          </div>
		<iframe style="border:0;margin:0px auto;display:block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.7914926511985!2d-2.119213300000032!3d57.1406267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488411d82d8829c5%3A0x55efc54b53c177d4!2s4+Granton+Pl%2C+Aberdeen%2C+Aberdeen+City+AB10!5e0!3m2!1sen!2suk!4v1438025035635" width="600" height="450" allowfullscreen></iframe>
    <section class="well01">
      <div class="container">
	  <div class="row">
          <div class="grid_6 wow bounceInLeft">
            <address class="addr">
               <dt><span class="fa fa-mobile"></span></dt>
                <dd>Tel:01224 967337</dd>
            </address>  
          </div>
          <div class="grid_6 wow bounceInRight">
            <address class="addr">
                <div class="row">
			  <dt><span class="fa fa-envelope"></span></dt>
              <dd><a href="mailto:">enquiries@optimalmaintenance.co.uk</a></dd>
            </address>            
          </div>          
        </div>
      </div>
    </section>
        </div>
      </div>
    </section>
    <section class="parallax well03" data-url="images/parallax12.jpg">
      <div class="container">
	  
        <h2>contact form</h2>
        <h3 class="color1">We would love to hear from you!</h3>
		
          <div class="row">
          <div class="preffix_3 grid_6">
              <!-- Error Checks -->
              <div class="contact">

                  <?php if(!empty($errors)): ?>
                      <div class="panel">
                          <ul>
                              <li><?php echo implode('<li></li>', $errors); ?> </li>
                          </ul>
                      </div>
                  <?php endif; ?>
              </div>
              <!-- End of Error Checks -->


              <form name="#" method="post" action="mailLogic.php">
                  <div>

                      <label>
                          <span></span><input id="name" type="text" name="inputname" placeholder="Name*:"  <?php echo isset($fields['inputname']) ? 'value="' . e($fields['inputname']) .'"' : '' ?> required/>
                      </label>
                      <br>
                      <br>

                      <label>
                          <span></span><input id="email" type="text" name="email" placeholder="Email*:" <?php echo isset($fields['email']) ? 'value="' . e($fields['email']) .'"' : '' ?> required/>
                      </label>
                      <br>
                      <br>

                      <label>
                          <span></span><input id="subject" type="number" name="phone" placeholder="Phone:" <?php echo isset($fields['Phone']) ? 'value="' . e($fields['Phone']) .'"' : '' ?>/>
                      </label>
                      <br>
                      <br>

                      <label>
                          <span></span><textarea id="feedback" name="message" maxlength="999999" minlength="20" placeholder="Message*:" <?php echo isset($fields['message']) ? e($fields['message']) : '' ?> required></textarea>


                          <input type="submit" value="Send">
                      </label>

                  </div>

              </form>








          </div>
        </div>
      </div>

    </section>
  </main>

  <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class="bg01">
    <div class="container">
      <p class="copy">
        Copyright © <span id="copyright-year"></span> |
        <a href="privacy-policy.html">Privacy Policy</a>
      </p>
    </div>
  </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>
<?php

unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>