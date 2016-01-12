  <div id="wrapper">
    <div id="container" class="clearfix">
      <div id="header">

		<ul id="main_menu">
			<img id="logo" src="<?php print $logo ?>"/>
			<li class="menu-item">
				<a href="#">Accueil</a></li>
			<li class="menu-item first">
				<a href="#">Formation</a>
				<ul class="submenu">
					<li class="submenu-item"><a href="#">Présentation</a></li>
					<li class="submenu-item"><a href="#">Emploi du temps</a></li>
					<li class="submenu-item"><a href="#">Programme</a></li>
					<li class="submenu-item"><a href="#">Stage</a></li>
					<li class="submenu-item"><a href="#">Pôle Lardy et UBP</a></li>
					<li class="submenu-item"><a href="#">Notre groupe de recherche</a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="#">Métiers</a>
				<ul class="submenu">
					<li class="submenu-item"><a href="#">Administrateur réseau</a></li>
					<li class="submenu-item"><a href="#">Analyste / Programmeur</a></li>
					<li class="submenu-item"><a href="#">Chef de projet</a></li>
					<li class="submenu-item"><a href="#">Community manager</a></li>
					<li class="submenu-item"><a href="#">Webdesigner</a></li>
					<li class="submenu-item"><a href="#">Webmarketer</a></li>
					<li class="submenu-item"><a href="#">Webmaster</a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="#">Étudiants</a>
				<ul class="submenu">
					<li class="submenu-item"><a href="#">Modalités d'admission</a></li>
					<li class="submenu-item"><a href="#">Suivis de candidature</a></li>
					<li class="submenu-item"><a href="#">Association étudiante</a></li>
					<li class="submenu-item"><a href="#">Carte Campus</a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="#">Entreprises</a>
				<ul class="submenu">
					<li class="submenu-item"><a href="#">Nos partenaires</a></li>
					<li class="submenu-item"><a href="#">Taxe d'apprentissage</a></li>
					<li class="submenu-item"><a href="#">Poster une offre de stage ou d'emploi</a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="#">Contact</a>
			</li>
		</ul>		
		
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
  
