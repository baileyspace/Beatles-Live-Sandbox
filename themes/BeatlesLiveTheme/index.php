<?php head(array('bodyid'=>'home')); ?>

<div id="primary-index">
	<div class="clear"></div>
	<div class="moviebars"></div>
	<div class= "youtube">
		<iframe width="500" height="375" src="http://www.youtube.com/embed/oWzs3YbtehI" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="moviebars"></div>
	<div id="beatlesimgs">
		<a href= '<?php echo uri('contribution'); ?>' id='shareimg'>Share a Memory</a>
		<a href= '<?php echo uri('collections'); ?>' id='aboutimg'>News and Updates</a>
		<a href= '<?php echo uri('collections'); ?>' id='tourimg'>Go On Tour!</a>
		<!-- <?php echo link_to_collections(array('Go On Tour'));?> -->
 	</div>
    
</div><!-- end primary -->
<?php foot(); ?>
