<?php 
	header('Content-Type: text/css');
	require(join(DIRECTORY_SEPARATOR, array('..', 'Classes', 'IncludeManager.php')));
 ?>

.CookiePopup {
	z-index: 999999; 
	opacity: 0.9; 
	position: fixed; 
	padding: 15px; 
	font-weight: normal; 
	text-align: left; 
	color: <?php echo MktColor::$Cookie_Text; ?>
	-webkit-box-shadow: rgb(0, 0, 0) 0px 0px 8px; 
	box-shadow: rgb(0, 0, 0) 0px 0px 8px;
	bottom: 20px; 
	right: 20px; 
	background-color: <?php echo MktColor::$Cookie_Background; ?>
	border-top: <?php echo MktColor::$LijntjeDikte; ?> solid <?php echo MktColor::$Lijntje; ?>
}

.Mobiel .CookiePopup {
	width: 88%; 
}

.Pagina .CookiePopup {
	font-size: large !important;
	width: 30%; 
}

.CookiePopup h4 {
	padding: 5px 5px 7px; 
	text-align: center; 
	font-weight: bold; 
	margin: 0px; 
	background-color: <?php echo MktColor::$Cookie_Background; ?>
}

.CookiePopup .button {
	display: inline;
	text-align: center;
	margin: 0 auto;
	padding: 10px;
}

.CookiePopup div {
	padding: 6px 10px; 
	font-weight: bold; 
	text-align: center; 
	cursor: pointer; 
	margin: 5px 10px; 
	text-shadow: rgb(0, 0, 0) 0px 0px 2px;
	background-color: <?php echo MktColor::$Cookie_Button; ?>
}