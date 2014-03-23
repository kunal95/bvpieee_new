<?php echo'
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="Nav_Bar/css/default.css" />
		<link rel="stylesheet" type="text/css" href="Nav_Bar/css/component.css" />
		<script src="Nav_Bar/js/modernizr.custom.js"></script>
		<div class="nav" style="background:rgba(236, 236, 236, 1);">
			<ul id="cbp-tm-menu" class="cbp-tm-menu">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">IEEE</a>
				</li>
				<li>
					<a href="#">IEEE-HKN</a>
				</li>			
				<li>
					<a href="#">WIE</a>
				</li>
				<li>
					<a href="#">Events</a>
					<ul class="cbp-tm-submenu">
						<li><a href="#" class="cbp-tm-icon-archive">Event 0</a></li>
						<li><a href="#" class="cbp-tm-icon-cog">Event 1</a></li>
						<li><a href="#" class="cbp-tm-icon-location">Event 2</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Publications</a>
					<ul class="cbp-tm-submenu">
						<li><a href="#" class="cbp-tm-icon-archive">Pratibimb</a></li>
						<li><a href="#" class="cbp-tm-icon-cog">Cognizance</a></li>
						<li><a href="#" class="cbp-tm-icon-location">Reports</a></li>
					</ul>
				</li>
				<li>
					<a href="#">SIGs</a>
				</li>
				<li>
					<a href="#">Executive Community</a>
					<ul class="cbp-tm-submenu">
						<li><a href="#" class="cbp-tm-icon-archive">Item 0</a></li>
						<li><a href="#" class="cbp-tm-icon-cog">Item 1</a></li>
						<li><a href="#" class="cbp-tm-icon-location">Item 2</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Gallery</a>
				</li>
				<li>
					<a href="#">Contact Us</a>
				</li>
			</ul>
		</div>
		<script src="Nav_Bar/js/cbpTooltipMenu.min.js"></script>
		<script>
			var menu = new cbpTooltipMenu( document.getElementById( "cbp-tm-menu" ) );
		</script>
	'	;?>