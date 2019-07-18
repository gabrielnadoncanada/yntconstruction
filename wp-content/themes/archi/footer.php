<?php
/**
 * The template for displaying the footer
 */
 global $archi_option; 
?>
<?php 
    if(isset($archi_option['header_layout']) and $archi_option['header_layout']!="htop_page" ){
        get_template_part('framework/footers/footer-sidenav'); 
    }else{  
?>
	<!-- footer begin -->
	<footer <?php if ( !is_active_sidebar( 'footer-area-1' ) && !is_active_sidebar( 'footer-area-2' ) && !is_active_sidebar( 'footer-area-3' ) && !is_active_sidebar( 'footer-area-4' ) ){ ?>class="no-padding"<?php } ?> >
		
		<?php if ( is_active_sidebar( 'footer-area-1' ) || is_active_sidebar( 'footer-area-2' ) || is_active_sidebar( 'footer-area-3' ) || is_active_sidebar( 'footer-area-4' ) ){ ?>
			<div class="main-footer">
	            <div class="<?php if($archi_option['footer-wideboxed']!=false){echo 'container-fluid';}else{echo 'container';} ?>">
	                <div class="row">
	                    <?php get_sidebar('footer');?>
	                </div>    
	            </div>
	        </div>
		<?php } ?>

		<div class="subfooter <?php if(isset($archi_option['footer_layout']) and $archi_option['footer_layout']=="footer2" ){echo 'padtop80 padbottom80 footer-2';} ?>">
			<div class="<?php if($archi_option['footer-wideboxed']!=false){echo 'container-fluid';}else{echo 'container';} ?>">
				<div class="row">
					<?php if(isset($archi_option['footer_layout']) and $archi_option['footer_layout']=="footer2" ){ ?>
						<div class="col-md-3">
	                        <img src="<?php echo esc_url($archi_option['logo_footer']['url']); ?>" class="logo-small" alt=""><br>
	                    </div>
					<?php } ?>
					<div class="col-md-6">
						<?php echo htmlspecialchars_decode( do_shortcode( $archi_option['footer_text'] ) ); ?>                     
					</div>

					<?php if($archi_option['switch_footer_social']!=false){ ?>
						<div class="<?php if(isset($archi_option['footer_layout']) and $archi_option['footer_layout']=='footer2' ){echo 'col-md-3';}else{echo 'col-md-6';} ?> text-right">
							<div class="social-icons">
								<ul>
									<?php if($archi_option['facebook']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['facebook']); ?>"><i class="fa fa-facebook"></i></a></li>                                    
									<?php } ?>                                
									<?php if($archi_option['twitter']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['twitter']); ?>"><i class="fa fa-twitter"></i></a></li>                                    
									<?php } ?>                                
									<?php if($archi_option['google']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['google']); ?>"><i class="fa fa-google-plus"></i></a></li>                                    
									<?php } ?>
									<?php if($archi_option['dribbble']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['dribbble']); ?>"><i class="fa fa-dribbble"></i></a></li>
									<?php } ?>
									<?php if($archi_option['pinterest']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['pinterest']); ?>"><i class="fa fa-pinterest"></i></a></li>
									<?php } ?>
									<?php if($archi_option['linkedin']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['linkedin']); ?>"><i class="fa fa-linkedin"></i></a></li>
									<?php } ?>                                
									<?php if($archi_option['youtube']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['youtube']); ?>"><i class="fa fa-youtube"></i></a></li>                                    
									<?php } ?>  
									<?php if($archi_option['vimeo']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['vimeo']); ?>"><i class="fa fa-vimeo-square"></i></a></li>
									<?php } ?>									                                                            
									<?php if($archi_option['skype']!=''){ ?>
										<li><a href="<?php echo esc_attr($archi_option['skype']); ?>"><i class="fa fa-skype"></i></a></li>
									<?php } ?>                               
									<?php if($archi_option['instagram']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['instagram']); ?>"><i class="fa fa-instagram"></i></a></li>
									<?php } ?>  
									<?php if($archi_option['github']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['github']); ?>"><i class="fa fa-github"></i></a></li>
									<?php } ?>
									<?php if($archi_option['tumblr']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['tumblr']); ?>"><i class="fa fa-tumblr-square"></i></a></li>
									<?php } ?>
									<?php if($archi_option['soundcloud']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['soundcloud']); ?>"><i class="fa fa-soundcloud"></i></a></li>
									<?php } ?>
									<?php if($archi_option['behance']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['behance']); ?>"><i class="fa  fa-behance"></i></a></li>
									<?php } ?>
									<?php if($archi_option['lastfm']!=''){ ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['lastfm']); ?>"><i class="fa fa-lastfm"></i></a></li>
									<?php } ?>
									<?php if($archi_option['rss']!=''){ ?>                                    
										<li><a target="_blank" href="<?php echo esc_url($archi_option['rss']); ?>"><i class="fa fa-rss"></i></a></li>                                    
									<?php } ?>
									<?php if($archi_option['social_extend']!=''){ 
		                                echo htmlspecialchars_decode( do_shortcode( $archi_option['social_extend'] ) );
		                            } ?> 
	                            </ul>                                  
							</div>
						</div>  
					<?php } ?>                      
				</div>
			</div>
		</div>

		<a id="back-to-top" href="#" class="show"></a>
	</footer>

</div><!-- #wrapper -->

<?php } ?>    
<?php wp_footer(); ?>
<script>


function initComparisons() {
    var x, i;
    /*find all elements with an "overlay" class:*/
    x = document.getElementsByClassName("img-comp-overlay");
    for (i = 0; i < x.length; i++) {
        /*once for each "overlay" element:
        pass the "overlay" element as a parameter when executing the compareImages function:*/
        compareImages(x[i]);
    }
    function compareImages(img) {
        var slider, img, clicked = 0, w, h;
        /*get the width and height of the img element*/
        w = img.offsetWidth;
        h = img.offsetHeight;
        /*set the width of the img element to 50%:*/
        img.style.width = (w / 2) + "px";
        /*create slider:*/
        slider = document.createElement("DIV");
        slider.setAttribute("class", "img-comp-slider");
        /*insert slider*/
        img.parentElement.insertBefore(slider, img);
        /*position the slider in the middle:*/
        slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
        slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
        /*execute a function when the mouse button is pressed:*/
        slider.addEventListener("mousedown", slideReady);
        /*and another function when the mouse button is released:*/
        window.addEventListener("mouseup", slideFinish);
        /*or touched (for touch screens:*/
        slider.addEventListener("touchstart", slideReady);
        /*and released (for touch screens:*/
        window.addEventListener("touchstop", slideFinish);
        function slideReady(e) {
            /*prevent any other actions that may occur when moving over the image:*/
            e.preventDefault();
            /*the slider is now clicked and ready to move:*/
            clicked = 1;
            /*execute a function when the slider is moved:*/
            window.addEventListener("mousemove", slideMove);
            window.addEventListener("touchmove", slideMove);
        }
        function slideFinish() {
            /*the slider is no longer clicked:*/
            clicked = 0;
        }
        function slideMove(e) {
            var pos;
            /*if the slider is no longer clicked, exit this function:*/
            if (clicked == 0) return false;
            /*get the cursor's x position:*/
            pos = getCursorPos(e)
            /*prevent the slider from being positioned outside the image:*/
            if (pos < 0) pos = 0;
            if (pos > w) pos = w;
            /*execute a function that will resize the overlay image according to the cursor:*/
            slide(pos);
        }
        function getCursorPos(e) {
            var a, x = 0;
            e = e || window.event;
            /*get the x positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x coordinate, relative to the image:*/
            x = e.pageX - a.left;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            return x;
        }
        function slide(x) {
            /*resize the image:*/
            img.style.width = x + "px";
            /*position the slider:*/
            slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
        }
    }
}
</script>
<script>
initComparisons();
</script>
</body>
</html>