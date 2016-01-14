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
		
		<?php 
			if ($is_front || strstr($_GET['q'], 'admin/block')) : ?>
				<div id="container_actualites" class="actualites">
				  <?php print render($page['actualites']); ?>
				</div>
				
				<div id="container_partenaires" class="partenaires">
				  <?php print render($page['partenaires']); ?>
				</div>
			<?php 
			else :
			 print render($page['content']); ?>
		<?php 
			endif; 
		?>
		
		<div id="footer">
		</div>
    </div>
	
  </div>
  
