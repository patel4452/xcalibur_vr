<?php

if(function_exists('vc_set_as_theme')):

	/* global vc include sections */

foreach ( glob( GENEMY_MODULES_PLUGIN_DIR."/sections/*.php" ) as $filename ){   

    include $filename;

}

/* global vc include sections */

foreach ( glob( GENEMY_MODULES_PLUGIN_DIR."/templates/*.php" ) as $filename ){   

    include $filename;

}

endif;

?>