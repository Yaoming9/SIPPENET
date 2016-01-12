  <div id="wrapper">
    <div id="container" class="clearfix">
	<br><br><br>
      <div id="header">
		<img id="logo" src="<?php print $logo ?>"/>
		<?php print render($page['header']); ?>
				
		<!-- Menu sur mobile -->
		<ul id="main_menu_mobile">
			<img id="logo_mobile" src="<?php print $logo ?>"/>
			<li class="menu-item-mobile first">
				<img id="hamburger-menu" src="sites/all/themes/MonTheme/imgs/hamburger-icon.png" height="48px" width="48px">
				<ul class="submenu">
					<li class="submenu-item"><a href="#">Accueil </a></li>
					<li class="submenu-item"><a href="#">Formation</a></li>
					<li class="submenu-item"><a href="#">Métiers</a></li>
					<li class="submenu-item"><a href="#">Étudiants</a></li>
					<li class="submenu-item"><a href="#">Entreprises</a></li>
					<li class="submenu-item"><a href="#">Contact</a></li>
				</ul>
			</li>
		</ul>
		<!--******************************************** -->
      </div>
		
		<?php print render($page['content']); ?>
		
		<div id="footer">
			<!--<div class="footer-categ" id="liens-container">
				<span class="title-category-footer">Suivez-nous</span>
				<ul class="footer-ul" id="liens">
					<li><a class="footer-a" href="#">Facebook</a></li>
					<li><a class="footer-a" href="#">Twitter</a></li>
					<li><a class="footer-a" href="#">Google +</a></li>
					<li><a class="footer-a" href="#">YouTube</a></li>
				</ul>
			</div>
			<div class="footer-categ" id="partenaires-container">
				<span class="title-category-footer">Nos Partenaires</span>
				<ul class="footer-ul" id="partenaires">
					<li><a class="footer-a" href="#">Entreprise 1</a></li>
					<li><a class="footer-a" href="#">Entreprise 2</a></li>
				</ul>
			</div>
			<div class="footer-categ" id="pays-container">
				<span class="title-category-footer">Présence mondiale</span>
				<ul class="footer-ul" id="pays">
					<li><a class="footer-a" href="#">France</a></li>
					<li><a class="footer-a" href="#">Espagne</a></li>
					<li><a class="footer-a" href="#">Royaume-Uni</a></li>
				</ul>
			</div>-->
		</div>
    </div>
	
  </div>
  
