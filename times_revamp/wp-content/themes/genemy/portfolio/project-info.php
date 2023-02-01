<?php 
$portfolio_infos_title = get_post_meta( get_the_ID(), 'portfolio_infos_title', true );
$portfolio_infos = get_post_meta( get_the_ID(), 'portfolio_infos', true );
if( !empty($portfolio_infos) ):
?>
<!-- PROJECT INFO -->
<div class="project-info">
    <h5 class="h5-xs"><?php echo esc_attr($portfolio_infos_title) ?></h5>                     
    <?php foreach ($portfolio_infos as $key => $value) : ?>    
        <p>
            <?php echo esc_attr($value['title']) ?></h5>
            <span>
            	<?php 
            	if( isset($value['linkable']) && ($value['linkable'] == 'on') ){
            		echo '<a class="project-info-link rose-color" href="'.esc_url($value['url']).'" target="'.esc_url($value['target']).'">'.esc_attr($value['desc']).'</a>';
            	}else{
            		echo esc_attr($value['desc']) ;
            	}
            	
            	?>            		
            </span>
        </p>
       
    <?php endforeach; ?>                    
</div>
<?php endif; ?>