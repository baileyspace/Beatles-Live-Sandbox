<?php head(array('bodyid'=>'home')); ?>

<div id="primary-index">
	<div class="clear"></div>
	<div class="moviebars"></div>
	<div class= "youtube"><iframe width="600" height="450" src="http://www.youtube.com/embed/7pQPjpX82z8" frameborder="0" allowfullscreen></iframe></div>
	<div class="moviebars"></div>
	<div class="beatlesimgs">
		<a href= '<?php echo uri('contribution'); ?>' id='bimg1'>WORDSSS</a>
		<a href= '<?php echo uri('collections'); ?>' id='bimg2'>WORDSSS</a>
		<a href= '<?php echo uri('collections'); ?>' id='bimg3'>WORDSSS</a>
		<!-- <?php echo link_to_collections(array('Go On Tour'));?> -->
 	</div>
    
</div><!-- end primary -->

<?php foot(); ?>
<!-- ,array('id'=>'bllogo') -->