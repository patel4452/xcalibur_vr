<?php
$buttonsArr = get_post_meta( get_the_ID(), 'portfolio_button', true );
echo '<div class="m-top-40">'.genemy_get_button_groups($buttonsArr).'</div>';
?>   