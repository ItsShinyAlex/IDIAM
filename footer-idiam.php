



<?php
global $mk_options;

$mk_footer_class = $show_footer = $disable_mobile = $footer_status = '';

$post_id = global_get_post_id();
if ( $post_id ) {
	$show_footer = get_post_meta( $post_id, '_template', true );
	$cases = array( 'no-footer', 'no-header-footer', 'no-header-title-footer', 'no-footer-title' );
	$footer_status = in_array( $show_footer, $cases );
}

if ( $mk_options['disable_footer'] == 'false' || ( $footer_status ) ) {
	$mk_footer_class .= ' mk-footer-disable';
}

if ( $mk_options['footer_type'] == '2' ) {
	$mk_footer_class .= ' mk-footer-unfold';
}


$boxed_footer = (isset( $mk_options['boxed_footer'] ) && ! empty( $mk_options['boxed_footer'] )) ? $mk_options['boxed_footer'] : 'true';
$footer_grid_status = ($boxed_footer == 'true') ? ' mk-grid' : ' fullwidth-footer';
$disable_mobile = ($mk_options['footer_disable_mobile'] == 'true' ) ? $mk_footer_class .= ' disable-on-mobile' : ' ';

?>

<section id="mk-footer-unfold-spacer">
    
    


   <section id="contacto">
    <div class="container">
        <div class="flex">
            
            <div class="col" id="mapa">
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="IDIAM instituto de Español de la Iglesia Anglicana de MÉXICO">
                
                
                 <div class="flex icons-bot">
                    <div class="col icon fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/001-alarm-clock.png" alt="horario">
                    </div>
                    <div class="col txt ">
                        <p >De Lunes a Viernes <br>
                        de 9:00 am a 5:00 pm</p>
                    </div>
                </div>

                
               
                <div id="phone" class="flex icons-bot">
                    <div class="col icon fcentered ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/003-smartphone.png" alt="teléfono">
                    </div>
                    <div class="col txt">
                        <p class="white phone">
                            <a class="white" href="tel:7773152870">(777) 3 15 28 70</a>
                        </p>
                    </div>
                </div>
                
    
               
                
                <div class="flex icons-bot">
                    <div class="col icon fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/004-map.png" alt="ubicación">
                    </div>
                    <div class="col txt fcentered">
                                         
                        <p>
                            Minerva #1, Colonia Jardínes 
                            de Delicias, Cuernavaca, Morelos
                        </p>
                    </div>
                </div>
                
               
                
               
                
                <div class="fcentered map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d940.7823156044791!2d-99.16812294669649!3d19.406820165643005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff154ab64aa3%3A0xe5ddf2cd58d48680!2sTuxpan+8%2C+Roma+Sur%2C+06760+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1536244758591" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
                
                 <div class="flex icons-bot mov-gmail">
                    <div class="col icon fcentered ">
                        <img class="nomar" src="<?php echo get_stylesheet_directory_uri(); ?>/img/002-gmail.png" alt="Gmail">
                    </div>
                    <div class="col txt">
                                         
                        <p class="s">
                            <a href="mailto:idiamdiocesisdecuernavaca@gmail.com?subject=Contacto%20IDIAM">idiamdiocesisdecuernavaca@gmail.com</a>
                        </p>
                    </div>
                </div>
                
             
                
            </div>
            
            <div class="col c-col">
                <h2>
                  ¡Contáctanos!
                </h2>
                
                <p class="pad-top">
                    Coméntenos qué necesita y lo dirigiremos al departamento que corresponde: 
                </p>
                
                
                
                <div id="cform">
                     <?php echo do_shortcode("[caldera_form id=CF5b766908b0b8a]"); ?>
                </div>
                
                
                <div class="flex mar-bot" id="followus">
                    
                     <div class="col icon fcentered">
                       <a href="https://www.instagram.com/bodybalance.mx/?hl=es-la" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/006-instagram.png" alt="Instagram"></a>
                       
                    </div>

                    <div class="col icon fcentered">
                       <a href="https://www.facebook.com/bodybalance.cdmx/" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/005-facebook.png" alt="Facebook"></a>
                       
                    </div>
                 
                   
                </div>
                
            </div>
            
            
            
        </div>
        
                       
    </div>
    </section>
    
    
</section>

<section id="mk-footer" class="<?php echo $mk_footer_class; ?>" <?php echo get_schema_markup( 'footer' ); ?>>
	<?php if ( $mk_options['disable_footer'] == 'true' && ! $footer_status ) : ?>
	<div class="footer-wrapper<?php echo $footer_grid_status; ?>">
		<div class="mk-padding-wrapper">
			<?php mk_get_view( 'footer', 'widgets' ); ?>
			<div class="clearboth"></div>
		</div>
	</div>
	<?php endif; ?>
	<?php
	if ( $mk_options['disable_sub_footer'] == 'true' && ! $footer_status ) {
		mk_get_view(
			'footer', 'sub-footer', false, [
				'footer_grid_status' => $footer_grid_status,
			]
		);
	}
?>
</section>
</div>
<?php
	global $is_header_shortcode_added;

	/**
	 * After new changed, it will return null if there is no header shortcode
	 * added. Need to check and save it as array if it's null to avoid error.
	 *
	 * @since 6.0.3
	 * @see /components/shortcodes/mk_header/config.php
	 */
	if ( ! is_array( $is_header_shortcode_added ) ) {
		$is_header_shortcode_added = array();
	}

if ( $mk_options['seondary_header_for_all'] === 'true' || get_header_style() === '3' || in_array( '3', $is_header_shortcode_added, true ) ) {
	mk_get_header_view(
		'holders', 'secondary-menu', [
			'header_shortcode_style' => $is_header_shortcode_added,
		]
	);
}
?>
</div>

<div class="bottom-corner-btns js-bottom-corner-btns">
<?php
if ( 'false' !== $mk_options['go_to_top'] ) {
	mk_get_view( 'footer', 'navigate-top' );
}

if ( 'false' !== $mk_options['disable_quick_contact'] ) {
	mk_get_view( 'footer', 'quick-contact' );
}

		do_action( 'add_to_cart_responsive' );
?>
</div>


<?php
if ( $mk_options['header_search_location'] === 'fullscreen_search' ) {
	mk_get_header_view( 'global', 'full-screen-search' );
}
?>

<?php if ( ! empty( $mk_options['body_border'] ) && $mk_options['body_border'] === 'true' ) { ?>
	<div class="border-body border-body--top"></div>
	<div class="border-body border-body--left border-body--side"></div>
	<div class="border-body border-body--right border-body--side"></div>
	<div class="border-body border-body--bottom"></div>
<?php } ?>

	<?php wp_footer(); ?>

	<?php do_action( 'mk_theme_before_body_closing' ); ?>
</body>
</html>



