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
<div id="header">   <!-- header -->
	<h1 id="logo"><a href="index.php"><img src="immagini/sfondi/header/logoesa.png" alt="Esamotors logo" /></a></h1>
	<img src="immagini/sfondi/header/header2.png" class="logomb"alt="" />
	
</div>  <!-- header END -->

<!--  navigation bar -->
<?php include_once("navigation.php"); ?>
  <!-- navigation bar end -->
  
  
<!-- promobar -->
<?php  include_once("promobar.php"); ?>
<!-- END of promobar -->


<div class="container_16 contenitore">   <!--  START contenitore -->

	<div class="grid_7" style="margin-top:20px; margin-left:10px;height: 420px;">
<iframe width="400" height="400" frameborder="0" scrolling="no" marginheight="0"
marginwidth="0" 
src="http://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=Esamotors+Srl,+Via+Santa+Maria+in+Campo,+Cavenago+di+Brianza,+MB&amp;aq=0&amp;oq=esamotors&amp;ie=UTF8&amp;hq=Esamotors+Srl,&amp;hnear=Via+Santa+Maria+in+Campo,+Cavenago+di+Brianza,+Monza+e+della+Brianza,+Lombardia&amp;ll=45.581893,9.409382&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br
/><small>
</div>
<div class="dovesiamocontent" style="margin-top:20px;margin-left:480px; width:400px;height: 400px; text-align:left;">
<strong>	<h1 style="margin-top: 0px;font-family:Arial;color:#af1d2b;font-size:24px;">Dove Siamo</h1></strong>
	<h2 style="margin-top:15px;font-family:Arial;color:grey;font-size:14px;">ESamotors si trova in <br />via S. Maria in Campo, 1 <br />20873 CAVENAGO BRIANZA (MB)<br/></h2>
	<h3 style="margin-top:30px;font-family:Arial;color:#af1d2b;font-size:16px;">Come Raggiungerci</h3>
	<h3 style="margin-top:10;font-family:Arial;color:grey;font-size:14px;text-transform:uppercase;text-decoration:underline;">autostrada A4 MILANO - VENEZIA</h3>
	<h3 style="width: 300px; text-align:justify;margin-top:5px;font-family:Arial;color:grey;font-size:12px;">(siamo ad 1km dal casello). Prendere l'uscita CAVENAGO CAMBIAGO, seguire le indicazioni per Cavenago, scesi dal cavalcavia dell'atostrada alla rotatoria svoltare a sinistra, proseguendo verso ORNAGO/VIMERCATE troverete i nostri uffici sulla sinistra.</h3>
	<h3 style="width: 300px; text-align:justify;margin-top:20px;font-family:Arial;color:grey;font-size:12px;"><a href="">scrivici qui</a> o chiama il numero 02 980 811 per ricevere indicazioni precise</h3>

</div>

</div>   <!-- END of contenitore -->

<div id="footer"></div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
	
	function promobar() {
		   $("#promobar").animate({"top":"0px"},1000); 		
	}
	function promobar2() {
		$("#promobar").animate({"top":"-380"})
	}
	$(".mostra").click(promobar);
	$(".nascondi").click(promobar2);
	
</script>
</html>







