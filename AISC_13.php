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
		<p> It gives me great pleasure to inform you that the IEEE-HKN workshop held on 4th October 2013 at Amrita University, Coimbatore on the occasion of IEEE ALL INDIA STUDENT CONGRESS 2013 was a definite success.</p>

<p>The IEEE-HKN-Lambda Eta Chapter team had put up a stall to promote and spread IEEE HKN in India. The queries were taken by the representatives and database of the interested student branches was collected which has been attached with the mail. The stall witnessed a huge response and student members including chairpersons of various student branches such as Gujarat, Hyderabad, Bangalore, Kerala, Madras, Delhi and Kolkata sections. </p>

<p>The stall was followed by a workshop cum presentation on IEEE-HKN by two Lambda Eta chapter representatives. The workshop saw a footfall of around 80-100 students. Attendees found the workshop very informative and interesting. They were keen to know more about IEEE HKN and showed interest in forming a chapter in their respective branches.<br>
Following is the recorded webcast of the workshop:<br>
IEEE-HKN WORKSHOP AT AISC 2013<br>

<a href="http://m.youtube.com/watch?feature=youtu.be&t=26m5s&v=jfHHnyAd_kE&desktop_uri=%2Fwatch%3Fv%3DjfHHnyAd_kE%26feature%3Dyoutu.be%26t%3D26m5s">http://m.youtube.com/watch?feature=youtu.be&t=26m5s&v=jfHHnyAd_kE&desktop_uri=%2Fwatch%3Fv%3DjfHHnyAd_kE%26feature%3Dyoutu.be%26t%3D26m5s</a>
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