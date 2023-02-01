<?php $share_title = get_post_meta( get_the_ID(), 'share_title', true ); ?>
<div class="project-share">                                  
    <h5 class="h5-xs"><?php echo esc_attr($share_title) ?></h5>
    <?php genemy_social_share(false); ?>                           
</div><!-- Share -->
