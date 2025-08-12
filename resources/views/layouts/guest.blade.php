<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<title>Trideep Kalita | Portfolio</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Montserrat:400,700|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Yesteryear" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" media="screen">	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.bxslider.css') }}" media="screen">

	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/settings.css') }}">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/layers.css') }}">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/navigation.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="screen">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fancyBox.css') }}" media="screen">

	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.migrate.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.imagesloaded.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
  	<script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.appear.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/waypoint.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/raphael-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/DevSolutionSkill.min.js') }}"></script>

	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.tools.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
		(Load Extensions only on Local File Systems !  
		The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('assets/js/gmap3.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/js/fancyBox.js') }}"></script>

</head>

<body>

    <div id="container" class="without-padding">
        <div id="content">
            {{ $slot }}
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright © 2025 by Cybernet Solutions. Made with Love.</p>
                </div>
                <div class="col-md-6">
                    <ul class="social-icons">
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- END REVOLUTION SLIDER -->
	<script type="text/javascript">
		var tpj=jQuery;				
		var revapi46;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_46_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_46_1");
			}else{
				revapi46 = tpj("#rev_slider_46_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 50,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 778,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
					responsiveLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					parallax: {
						type:"mouse",
						origo:"slidercenter",
						speed:2000,
						levels:[2,3,4,5,6,7,12,16,10,50],
						disable_onmobile:"on"
					},
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		});	/*ready*/

		// skills section
		jQuery(function(){
			$('.skills-box').appear(function() {
				DevSolutionSkill.init('circle1'); 
				DevSolutionSkill.init('circle2'); 
				DevSolutionSkill.init('circle3');
			});
		});
	</script>
	<script type="text/javascript" src="{{ asset('assets/js/smooth-scroll.js') }}"></script>

</body>

</html>
