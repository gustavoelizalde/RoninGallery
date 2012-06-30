<?php
	require 'facebook.php';
	$facebook = new Facebook(array(
	  'appId' => '159456757522326',
	  'secret' => 'a4e3adc61b8038f309ba5f133a31832c',
	));
	$theRequest = $facebook->getSignedRequest();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Ronin Gallery</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    
</head>

<body>
<div id="fb-root"></div>

<script type="text/javascript"> 
  window.fbAsyncInit = function() {
    FB.init({appId: '159456757522326', status: true, cookie: true, xfbml: true});
  window.setTimeout(function() {
    FB.Canvas.setAutoResize();
  }, 250);
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      'https://connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>

<!-- Wrapper -->
<div class="wrapper">
	
    <!-- Inner -->
	<div class="inner">
    
    		<?php if($theRequest["page"]["liked"] == 1 ){ ?>
            <!-- Liked Fan Page -->
            <div class="liked">
            
            	<a href="http://www.japancollection.com/japanese-prints-search/allprices-allartists-sneak-peak.php?subid=520" target="_blank" class="btn-saving">Clic here to Start Saving!</a>
            
            </div>
            <!-- Liked Fan Page -->
            
			<?php } else { ?>
            
            <!-- NON Like Fan Page -->
      		<div class="non-like"></div>
            <!-- NON Like Fan Page -->
            
            <?php } ?>
            
    </div>
    <!-- Inner -->

</div>
<!-- Wrapper -->

</body>
</html>