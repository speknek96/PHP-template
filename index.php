<?php
	include("/Classes/IncludeManager.php");
	$pageContent = MktPage::getPage();
	$menu = Menu::getMainMenu($pageContent);
?>
<!DOCTYPE html>
<html>
	<head>
<?php 
	echo Header::getMetaTags(); 
	echo Header::phpToJS($pageContent, $menu);
	echo Header::getDefaultHeader();
	echo Header::endScripts();
?>
	</head>

	<body>
		<div class="Pagina">
			<!-- Banner -->
			<?php
				if($pageContent->hasBanner == "true") {
					echo PHP_EOL .
					'<div class="Header">' . PHP_EOL . 
					'<img src="Pictures\header.jpg" />' . PHP_EOL .
					'</div>' . PHP_EOL;
				}
			?>
			<!-- End Banner -->
			
			<!-- Starting Main Menu-->
			<div class="Menu">
				<?php 
					echo $menu->PrintMenu();
				?>
			</div>
			<!-- End Main Menu -->
			
			<!-- Starting Side Bar-->
			<?php
				if($pageContent->hasSideBar == "true") {
					echo PHP_EOL .
					'<div class="sidebar">' . PHP_EOL .
					SideBar::createSidebar()->PrintBar() .
					'</div>';
				}
			?>
			<!--div class='sidebar'>
				<ul>
				   <li><a href='#'>Home</a></li>
				   <li class='has-sub'><a href='#'>Item 1 </a>
					  <ul>
						 <li><a href='#'>Product 1</a>
						 </li>
						 <li><a href='#'>Product 2</a>
						 </li>
					  </ul>
				   </li>
				   <li class='has-sub'><a href='#'>Item 2</a>
					  <ul>
						 <li><a href='#'>Product 1</a>
						 </li>
						 <li><a href='#'>Product 2</a>
						 </li>
					  </ul>
				   </li>
				   <li><a href='#'>Item 3</a></li>
				</ul>
			</div-->
			<!-- End Side Bar-->
			
			<!-- Starting Content -->
			<div class="Content">
				<br />
				<div class="markdown-body">
					<?php 
						echo $pageContent->content; 
						echo $pageContent->errorMessage;
					?> 
				</div>
				<br />
			</div>
			<!-- End Content -->
			
			<!-- Starting Footer -->
			<div class="Footer">
				<div style="margin-top:20px; text-align:center;">
					<a href="http://www.aanbiedingcyprus.nl/">www.aanbiedingcyprus.nl</a> 2015 All rights reserved. Hosted by <a href="http://www.xmlhosting.nl/">XMLHosting.nl</a> U kunt uw vakantie boeken bij:VakantieStunt & Duikreizen
				</div>
			</div>
			<!-- End Footer -->
		</div>
	</body>
</html>

