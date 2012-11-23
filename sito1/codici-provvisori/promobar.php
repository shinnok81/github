<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style type="text/css">
* {
	margin:0;
	padding:0;
}
#promobar {
	width: 300px;
	height: 400px;
	right:0px;
	top:-380px;
	background-color: #333333;
	position:absolute;
	border-radius: 0 0 0 15px;
	box-shadow: -2px 0px 1px #111;
}

#promoslide {
	position: absolute;
	bottom:0px;
	left:10px;
	width: 280px;
	height: 20px;
	border-top: 1px dotted #6689ee;
}
#promoslide p{
	float:left;
	margin-top: 0;
	text-transform: uppercase;
	color: grey;
	font-size: 12px;
	font-family: arial;
	color: red;
	top: 2px;
}
#promoslide .mostra, #promoslide .nascondi {
	color: #6689ee;
	cursor: pointer;
}
#promoslide .mostra:hover, #promoslide .nascondi:hover {
	border-bottom:1px dotted #6689ee;
}
.promobox {
	width: 280px;
	height: 55px;
	margin-top:5px;
	margin-left: 10px;
	border-bottom: 1px solid grey;
}
.promobox .promotitle {
	font-size: 14px;
	font-family: Arial;
	color: #6689ee;
	height: 15px;
}
.promobox .promocontent {
	font-size: 12px;
	font-family: 12px;
	color: grey;
	height: 25px;
	overflow: hidden;
}
.promobox .promolink {
	font-size: 10px;
	font-family:arial;
	color: grey;
	font-style: italic;
	height: 10px;
}
.promobox .promolink:hover {
	border-bottom: 1px dotted #6689ee;
}


</style>
</head>

<body>

<div id="promobar">
	<div class="promobox">
		<h5 class="promotitle">Titolo della promozione</h5>
		<p class="promocontent">Contenuto della promozione qua una breve descrizione in cui specificare a chi Ž destinata la promozione riportata qua nell-elenco</p>
		<a class="promolink">Leggi tutto...</a>
	</div>
	<div class="promobox">
		<h5 class="promotitle">Titolo della promozione</h5>
		<p class="promocontent">Contenuto della promozione qua una breve descrizione in cui specificare a chi Ž destinata la promozione riportata qua nell-elenco</p>
		<a class="promolink">Leggi tutto...</a>
	</div>
	<div class="promobox">
		<h5 class="promotitle">Titolo della promozione</h5>
		<p class="promocontent">Contenuto della promozione qua una breve descrizione in cui specificare a chi Ž destinata la promozione riportata qua nell-elenco</p>
		<a class="promolink">Leggi tutto...</a>
	</div>
	<div class="promobox">
		<h5 class="promotitle">Titolo della promozione</h5>
		<p class="promocontent">Contenuto della promozione qua una breve descrizione in cui specificare a chi Ž destinata la promozione riportata qua nell-elenco</p>
		<a class="promolink">Leggi tutto...</a>
	</div>
	<div class="promobox">
		<h5 class="promotitle">Titolo della promozione</h5>
		<p class="promocontent">Contenuto della promozione qua una breve descrizione in cui specificare a chi Ž destinata la promozione riportata qua nell-elenco</p>
		<a class="promolink">Leggi tutto...</a>
	</div>
	<div class="promobox">
		<h5 class="promotitle">Titolo della promozione</h5>
		<p class="promocontent">Contenuto della promozione qua una breve descrizione in cui specificare a chi Ž destinata la promozione riportata qua nell-elenco</p>
		<a class="promolink">Leggi tutto...</a>
	</div>
	<div id="promoslide"><p class="mostra">mostra</p><p>&#160; / &#160;</p><p class="nascondi">nascondi</p><p> &#160;&#160; news e promozioni</p></div>	
</div>



</body>
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
