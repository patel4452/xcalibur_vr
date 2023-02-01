<div class="row">
	<?php foreach ($paramsArr as $key => $value) : extract($value) ?>
	<div class="col-md-4">
		<div class="hbox-1">			
			<h5 class="h5-sm"><?php echo genemy_parse_text($title, array('tagclass' => 'rose-color')); ?></h5>	
			<p class="grey-color"><?php echo esc_attr($subtitle) ?></p>
		</div>		
	</div>
	<?php endforeach; ?>
</div>