<?php 

/*************************************************
## Get GDPR Types
*************************************************/
if(get_theme_mod('furnob_gdpr_type') == 'type2'){
	require_once( __DIR__ . '/gdpr2/gdpr.php' );
} else {
	require_once( __DIR__ . '/gdpr1/gdpr.php' );
}

