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
		<p>  The IEEE’s prestigious section “Women in Engineering” better known as BVPIEEE WIE successfully organized a self-defense training workshop in collaboration with Special Police Unit for Women and Children under Delhi Police with an objective of empowering women and providing safe and secure city for all the citizens.</p>
<p> 15 days long workshop commenced on 27th August 2013 with an inspiring speech by principal Prof. M.S.Bhattacharya accompanied by vice principal Dr.Anuradha Basu and branch counselor Rahul Bahl and continued till 11th September 2013.Workshop was completely free of cost and was made open for all the girls of college. </p>
<p>  Self Defence Training Workshop lived upto its expectations and experienced good participation.Two lady constables from Delhi Police fully trained the girls on how to tackle the various situations of eve-teasing and various other such problems. Certificate of Participation was given to all by Delhi Police ,which was inspected by principal Prof. M.S. Bhattacharya , Dr.Anuradha Basu and Dr.Vanita Jain.  </p>                                                                                                          
<p> The workshop successfully achieved its motive to empower girls and took their confidence to much higher level. This event’s success story added a new feather in the crown of BVPIEEE WIE. </p>


<p>-WIE BVPIEEE
 </p>
		</div>
		<div id="right">
			<p>Dated: 16 November, 2013
Venue: ASET, Bijwasan
-By Anshul Sharma and Aman Garg
A event on Introduction to MTT-S, was organized by joint collaboration of IEEE Societies of ASET(Amity School of Engineering Technology) and MSIT(Maharaja Surajmal Institute of Technology). We (Anshul Sharma and Aman Garg) IEEE student member, represented BVPIEEE at that event. Event started with a session on “Student Section Network and various Opportunities” by Mr. Nivas Ravichandran (SB NETWORKING SECRETARY at IEEE R10 SAC INDIA, Social Media Lead at IEEE R10). Session was interactive and informative .His advise on startups and networking was  helpful. Event was continued by Arjun Narain(MSIT-Representative) .He gave brief introduction on MTT-S and various events and projects on MTT-S organized by MTT-S society of MSIT under flagship of IEEE, out of which some of the major events were, Summer Grant Program(SGP),YAGI antennae design workshops, RF module and NASA Radio jove.
This was followed by project demonstration on NASA Radio JOVE and YAGI antennae by MTT-S members of IEEE MSIT. Event came to an end by interactive session on HAM Radio by, Mrs. D.Bharathi Prasad “VU2RBI”, Chief coordinator (National Institute of Amateur Radio). She gave a brief description on HAM radio telecommunication , and its prospects as a medium of communication in hazard prone areas . With her long association with HAM Radio communication and 30 years experience of being an amateur HAM Radio operator ,it was a privledge for us to talk about various aspects of Ham Radio telecommunication .
Overall, it was a informative event with ample opportunities of networking, it gave us insights to the world of microwave theory and techniques. 
</p>
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