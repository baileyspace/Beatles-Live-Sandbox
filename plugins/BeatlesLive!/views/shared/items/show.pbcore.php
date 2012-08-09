<?php echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'; ?>
<PBCoreDescriptionDocument xmlns="http://www.PBCore.org/PBCore/PBCoreNamespace.html"
              xmlns:mt="http://www.iana.org/assignments/media-types/"
              xmlns:la="http://www.loc.gov/standards/iso639-2/"
              xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
		
	<?php $item = get_current_item(); ?>

	<PBCoreAssetDate dateType="Concert"><?php echo item('BeatlesLive', 'Related Concert Date'); ?></PBCoreAssetDate>
	<PBCoreIdentifier source="Omeka"><?php echo abs_item_uri($item); ?></PBCoreIdentifier>

	<?php foreach (item('BeatlesLive', 'Title', array('all'=>true)) as $title) { ?>
	<PBCoreTitle><?php echo $title; ?></PBCoreTitle>
	<?php } ?>

	<?php $tags = get_tags(array('sort_field' => 'name'), null); 
	foreach ($tags as $tag): ?>
	<PBCoreSubject source="Free tags"><?php echo $tag; ?></PBCoreSubject>
	<?php endforeach; ?>
	
	<PBCoreDescription><?php echo item('BeatlesLive', 'Description'); ?></PBCoreDescription>
	<PBCoreCoverage>
		<coverage><?php echo item('BeatlesLive', 'Related City'); ?></coverage>
		<coverageType>Spatial</coverageType>
	</PBCoreCoverage>
	
	<?php foreach (item('BeatlesLive', 'Creator', array('all'=>true)) as $creator) { ?>
	<PBCoreCreator>
		<creator><?php echo $creator; ?></creator>
		<creatorRole>Contributed by</creatorRole>
	</PBCoreCreator> <?php } ?>  
	<?php endforeach; ?>
</PBCoreDescriptionDocument>