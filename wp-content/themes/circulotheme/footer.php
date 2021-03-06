<footer class="bg-lowblue">
	<div class="container">
    	<div class="row">

    		<div class="col-md-3 logo-footer">
    			<a href="<?php bloginfo('url')?>" title="Circulo de Egresados IPCHILE" rel="nofollow">
    				<img src="<?php bloginfo('template_directory')?>/images/logo_circulo.png" alt="">
    			</a>
    		</div>
        
			
			<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav fl col-md-9 row service border-nav' , 'theme_location' => 'secondary' ) ); ?>
			<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav fl col-md-6 row service' , 'theme_location' => 'third' ) ); ?>
            <ul class="col-md-3 col-xs-6 websoc">
            	<div class="box-soc">
            		<h4>Redes Sociales IPCHILE</h4>
            		<span>Buscanos en:</span>
                    <li><a href="<?php echo get_field('facebook','options')?>"><span class="fa fa-fw fa-facebook"></span></a></li>
                    <li><a href="<?php echo get_field('youtube','options')?>"><span class="fa fa-fw fa-youtube-play"></span></a></li>
            	</div>
            </ul>

        </div>
    </div>
</footer>
<div class="bg-highblue">
        <span class="credit-footer">IPCHILE - Todos los Derechos Reservados ©</span>
</div>

</body>
<?php wp_footer()?>



<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
jQuery(window).load(function() {
	jQuery("#loader-wrapper").fadeOut("slow");
})
</script>

<?php if(is_home() || is_404()){ //supersized?>
<?php $bgd = wp_get_attachment_image_src( get_field('default_background' , 'options') , 'full')?>
<script type="text/javascript">

jQuery(document).ready(function() {
	jQuery('body').append('<div id="supersized-loader"></div><div id="supersized"></div>');
});

			jQuery(function($){
				$.supersized({
					slideshow               :   1,		//Slideshow on/off
					autoplay				:	1,		//Slideshow starts playing automatically
					start_slide             :   1,		//Start slide (0 is random)
					random					: 	0,		//Randomize slide order (Ignores start slide)
					slide_interval          :   8000,	//Length between transitions
					transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	300,	//Speed of transition
					new_window				:	1,		//Image links open in new window/tab
					pause_hover             :   0,		//Pause slideshow on hover
					keyboard_nav            :   0,		//Keyboard navigation on/off
					performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,		//Disables image dragging and right click with Javascript
					image_path				:	'img/', //Default image path
					min_width		        :   0,		//Min width allowed (in pixels)
					min_height		        :   0,		//Min height allowed (in pixels)
					vertical_center         :   0,		//Vertically center background
					horizontal_center       :   1,		//Horizontally center background
					fit_portrait         	:   1,		//Portrait images will not exceed browser height
					fit_landscape			:   0,		//Landscape images will not exceed browser width
					navigation              :   1,		//Slideshow controls on/off
					thumbnail_navigation    :   0,		//Thumbnail navigation
					slide_counter           :   0,		//Display slide numbers
					slide_captions          :   0,		//Slide caption (Pull from "title" in slides array)
					slides 					:  	[		//Slideshow Images
														{image : '<?php echo $bgd[0] ?>', title : '',},  
														 
												]
				}); 
		    });
</script>
<?php }?>

<?php if(is_page(19)){ //bigvideo?>
<script>
	jQuery(function() {
		var BV = new $.BigVideo();
		BV.init();
		  BV.show('<?php echo get_field('video_loop' , 19)?>',{doLoop:true});
	});
</script>
<?php }?>

<?php /* if(is_page(502)){ //bigvideo?>
<script>
	jQuery(function() {
		var BV = new $.BigVideo();
		BV.init();
		  BV.show('<?php echo get_field('video_loop' , 502)?>',{doLoop:true});
	});
</script>
<?php } */?>

<script>
jQuery(function(){
    $("#menu-item-1281 a").popover({
        html : true, 
        placement: 'top',
        content: function() {
          return $('#filis').html();
        }
    });

	 $('.clsss').click(function(event) {
		 $('#menu-item-1281 a').popover('hide');
	}); 

});

/* jQuery(function () {
  $('[data-toggle="popover"]').popover();
}) */

	  
/*jQuery('.popover').on('shown.bs.popover', function () {
  	var pcon = $('#filis').html();
	  console.log(pcon);
	  $('.popover-content').html(pcon);
})	  
*/
</script>

</html>