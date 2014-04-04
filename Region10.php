<html style="overflow-x:hidden;">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1""> 
		<title>BVPIEEE | Passion To Perfection</title>
		<link rel="stylesheet" href="css/body.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="js/jquery.fittext.js"></script>
		<script>
			jQuery("#responsive_headline").fitText();
		</script>
	</head>
<?php include ("Header/header.php"); ?>
<audio loop autoplay>
  <source src="Oooh.mp3" type="audio/mpeg">
</audio>
<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
<?php include ("Nav_Bar/nav_bar.php"); ?>
<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>

<div id="wrapper" >
	<div id="container">
		<div id="left">
		<h4>IEEE Region 10 Congess</h4>
		<h5>Student|GOLD|WIE</h5>
		<p>  The IEEE Region 10 Student/GOLD/WIE Congress is a biennial event, which provides an opportunity for students and young professionals from Asia-Pacific to network with like-minded volunteers and share ideas. Recent editions of the Congress have been hosted by IEEE sections of Singapore (2009) and Auckland (2011). </p>

<p>Hyderabad Section of the India Council hosted the seventh edition of this Congress from 11-14 July 2013 at Taj Krishna, with primary objectives being networking, technology outreach and community engagement activities. The event witnessed a participation of over two hundred and fifty delegates from about twenty different countries. </p>

<p>This international platform has been remarkably utilized by Lambda-Eta Chapter HKN, to showcase the exemplary achievements and awards of our student branch. A team of four students from the IEEE student branch of Bharati Vidyapeeth’s College of Engineering, New Delhi, was sponsored by IEEE Eta Kappa Nu to attend this Congress for assisting the Educational Activities Board in making the honor society a stronger community in Asia-Pacific region.  A booth was put up for two days in the exhibition area of Congress to brief delegates about the benefits of having an IEEE-HKN student chapter and the complete procedure to establish it. Since the selected students have managed to attract the attention of many people from various sections in Region 10, it is expected that this combined effort of HKN and Lambda Eta Chapter shall help IEEE-HKN grow further, transforming BVPIEEE into a distinguished parent branch.</p>

<p>The Executive Committee looks forward to send more exceptionally active volunteers as delegates to the following editions of this phenomenal flagship event of IEEE Asia-Pacific region.</p>

<p>Udit Khanna <br>
Student Representative, <br>
BVPIEEE
 </p>
		</div>
		<div id="right">
			<p>This is 1st right</p>
		</div>
		<div id="right">
			<p>This is 2nd right</p>
		</div>
		<div id="right">
			<p>This is 3rd right</p>
		</div>
	</div>
	<div id="left_f" style="border-radius:50px 50px 0 0;background:rgba(236, 236, 236, 1);">
		<p style="float:left;">BVPIEEE | Passion To Perfection</p>
		<p style="float:right; display:inline;">Keep In Touch
		</p>
	</div>
</div>
<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
</html>