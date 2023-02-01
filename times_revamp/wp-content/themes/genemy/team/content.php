<div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <!-- SINGLE PROJECT IMAGE -->
        <div class="col-md-6">
            <div class="project-img">
                <!-- Image -->  
                <?php the_post_thumbnail( 'genemy-700x700-crop', array('class' => 'img-fluid m-bottom-10') ) ?>                 
            </div>  
        </div>  <!-- END SINGLE PROJECT IMAGE -->


        <!-- SINGLE PROJECT TEXT -->
        <div class="col-md-6">
            <div class="p-left-30">
                <!-- Title -->
                <?php $designation = get_post_meta( get_the_ID(), 'designation', true ); ?>
                <span class="<?php echo genemy_default_color(); ?>-color"><?php echo esc_attr($designation) ?></span>
                <?php the_title( genemy_team_post_title_before(), genemy_team_post_title_after()); ?><!-- Single Post Title -->

                <?php get_template_part( 'team/header-info' ); ?>

                <?php the_content(); ?>

            </div>  
        </div>  <!-- END SINGLE PROJECT TEXT -->
    </div>
</div>