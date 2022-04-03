
<?php
//* Do NOT include the opening php tag shown above. Copy the code shown below.
//* Redirect homepage on mobile
add_action( 'wp_head', 'wps_params', 10 );
function wps_params() {
    ?>
    
	<script>
	if (window.location.pathname == '/' && jQuery(window).width() <= 480) {
	   window.location = "/webshop/";
	}
	</script>

    <?php
}