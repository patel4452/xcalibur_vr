<!-- IMAGE #1 -->
<?php $size = 'genemy-400x500-crop'; ?>
<div class="portfolio-item <?php echo genemy_get_the_term_list( get_the_ID(), 'portfolio_category', ' ', ' ', '', false ) ?>">
    <div class="hover-overlay"> 
        
        <?php if( has_post_thumbnail() ): ?>
            <!-- Project Preview Image -->
            <img class="img-fluid" src="<?php the_post_thumbnail_url( $size ); ?>" alt="<?php the_title_attribute(); ?>" /> 
        <?php endif; ?>
        <div class="item-overlay"></div>

        <!-- Project Description -->
        <div class="project-description white-color">
            <div class="project-link">
                <!-- Project Meta -->
                <p class="<?php echo genemy_default_color() ?>-color"><?php echo genemy_get_the_term_list( get_the_ID(), 'portfolio_category', '', ', ', '', true ) ?></p>  
                <!-- Project Link -->
                <h5 class="h5-lg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            </div>
        </div> 
        
    </div>  
</div>  <!-- END IMAGE #1 -->
