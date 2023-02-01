<div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
    $vc_display = get_post_meta( get_the_ID(), 'project_vc_display', true );
    $vc_display = ( $vc_display == '' )? 'off' : $vc_display;
    if( $vc_display == 'off' ):
    ?>
    <div class="row">
        <!-- SINGLE PROJECT IMAGE -->
        <div class="col-md-6 popup-gallery">
            <div class="project-preview m-bottom-40">
              
                <?php 
                $image_display = get_post_meta( get_the_ID(), 'project_image_display', true );
                $image_display = ( $image_display == '' )? 'on' : $image_display;
                if( $image_display != 'off' ):
                ?>
                <!-- Image #1 -->
                <div class="project-image">
                    <div class="hover-overlay">
                        <?php the_post_thumbnail( 'genemy-700x700-crop',array('class' => 'img-fluid') ) ?>
                        <div class="item-overlay"></div>
                        <div class="image-zoom">
                            <a href="<?php the_post_thumbnail_url( 'full' ); ?>" title="<?php the_title(); ?>"><i class="fas fa-search-plus"></i></a>
                        </div> 
                    </div>
                </div>
                <?php endif; ?>

                <?php 
                $info_display = get_post_meta( get_the_ID(), 'project_info_display', true );
                $info_display = ( $info_display == '' )? 'on' : $info_display;
                if( $info_display != 'off' ){
                    get_template_part('portfolio/project-info'); 
                }
                
                $share_display = get_post_meta( get_the_ID(), 'project_share_display', true );
                $share_display = ( $share_display == '' )? 'on' : $share_display;
                if( $share_display != 'off' ){
                    get_template_part('portfolio/project-share');
                } 
                ?>

            </div>  
        </div>  <!-- END SINGLE PROJECT IMAGE -->


        <!-- SINGLE PROJECT TEXT -->
        <div class="col-md-6">
            <div class="project-txt-description p-left-20 m-bottom-40">
                <!-- PROJECT TITLE -->
                <div class="project-title">
                    <p class="rose-color"><?php echo genemy_get_the_term_list( get_the_ID(), 'portfolio_category', '<span class="'.genemy_default_color().'-color">', ' / ', '</span>', true ) ?></p>
                    
                    <?php the_title( genemy_portfolio_post_title_before(), genemy_portfolio_post_title_after()); ?><!-- Single Post Title -->                                                                   
                </div>
               

                <!-- PROJECT TEXT -->
                <div class="project-text">                
                    <?php the_content(); ?>
                    <?php 
                    $button_display = get_post_meta( get_the_ID(), 'portfolio_button_display', true );
                    $button_display = ( $button_display == '' )? 'on' : $button_display;
                    if( $button_display == 'on' ){
                        get_template_part('portfolio/project-buttons');
                    } 
                    ?>
                </div>    

            </div>  
        </div>  <!-- END SINGLE PROJECT TEXT -->

    </div>
    <?php else: ?>
    <?php the_content(); ?>
    <?php endif; ?>
</div>