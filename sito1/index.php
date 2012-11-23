<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>ESAmotors srl</title>
	<link rel="stylesheet" href="stili/reset.css" />
	<link rel="stylesheet" href="stili/960_16_col.css" />
	<link rel="stylesheet" href="stili/style.css" />
	<link rel="stylesheet" href="stili/navigation.css" />
	<link rel="stylesheet" href="stili/newsbar.css" />
	

</head>

<body>
<div id="header">  <!-- header -->
	<h1 id="logo"><a href="index.php"><img src="immagini/sfondi/header/logoesa.png" alt="Esamotors logo" /></a></h1>
	<img src="immagini/sfondi/header/header2.png" class="logomb"alt="" />
	
</div>  <!-- header END -->

<!--  navigation bar -->
<?php include_once("navigation.php"); ?>
<!-- navigation bar end -->


<!-- promobar -->
<?php  include_once("promobar.php") ?>
<!-- END of promobar -->



<div class="container_16 contenitore">   <!--  CONTENITORE START -->



</div><!--   END CONTENITORE -->

<div id="footer"></div>   
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
	
    
  function mostra(){
    $(this).children("div").stop().animate({"height":100},300);
  }
  function nascondi(){
    $(this).children("div").stop().animate({"height":0},300)
  }

  $("#menu li ul").css("height",0);
  $("#menu li").hover(mostra, nascondi);
	
</script>
</html>
