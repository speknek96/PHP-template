<?php 
	header('Content-Type: text/css');
	require(join(DIRECTORY_SEPARATOR, array('..', 'Classes', 'IncludeManager.php')));
 ?>
body {
	overflow-x: hidden;
	word-wrap: break-word;
}

.bcColor {
	background-color: <?php echo MktColor::$Menu_Background; ?>
}

.buddon {
    padding: 4px 10px 4px 45px !important;
    background:#00c400 url('../Pictures/buddon.png') no-repeat 10px center !important;
    text-decoration: none !important;
    color: whitesmoke !important;
}

.Pagina{
	margin : 20px auto 0 auto;
	font-family: 'Varela Round', Helvetica, Arial, sans-serif;
}

.Pagina .Header{
	float : left;
	height : 130px;
	margin-bottom: 10px;
}

.Pagina .tweet>*, .Pagina .tweet>*>*, .Pagina .tweet>*>*>* {
    height: inherit;
    width: inherit;
	text-decoration: none;
}

.Pagina .Menu{
	float : left;
	background-color: <?php echo MktColor::$Menu_Background; ?>
	margin-bottom: 20px;
	font-size: 125% !important;
}

.Pagina .Menu ul {
	list-style-type: none;
}

.Pagina .Menu ul li {
	display: inline;
	margin: 0;
	padding: 15px;
	padding-top: 18px;
	border: 0px solid <?php echo MktColor::$Menu_Outline; ?>
}

.Pagina .Menu ul li a{ 
    color: <?php echo MktColor::$Menu_Text; ?>
	text-decoration: none;
}

.Pagina .Menu ul li a:active { 
    color: <?php echo MktColor::$Menu_Text; ?>
	text-decoration: none;
}

.Pagina .menuItem{
	line-height: 45px;
	top: -10px;
	position: relative;
}

.Pagina .ulMainMenu{
	margin-bottom: -8px;
}

.Pagina .menuImg{
	display: none !important;
}

.Pagina .MenuButton{
	display: none;
}

.Pagina .Content{
	float : left;
	background-color: <?php echo MktColor::$Markdown_Background; ?>
}

.Pagina .Footer{
	float : left;
	background-color: <?php echo MktColor::$Footer_Background; ?>
	margin-top: 10px;
	margin-bottom: 5px;
	text-align:center;
	word-wrap: break-word;
}
.Pagina .Footer p{
	color:  <?php echo MktColor::$Footer_Text; ?>
}

.Pagina .Footer a{ 
    color: <?php echo MktColor::$Footer_Link; ?>
	text-decoration: none;
}

.Pagina .Footer a:active { 
    color: <?php echo MktColor::$Footer_Link; ?>
	text-decoration: none;
}

.Pagina .RoundedTop, .Pagina .Rounded{
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	-webkit-border-top-left-radius:10px;
	-webkit-border-top-right-radius:10px;
}

.Pagina .RoundedBottom, .Pagina .Rounded{
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	-moz-border-radius-bottomright: 10px;
	-webkit-border-bottom-left-radius:10px;
	-webkit-border-bottom-right-radius:10px;
}

.Pagina .TopBorder{
	border-top: <?php echo MktColor::$LijntjeDikte; ?> solid <?php echo MktColor::$Lijntje; ?>
}
