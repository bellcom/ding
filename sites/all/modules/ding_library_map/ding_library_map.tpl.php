<?php
// $Id$

/**
 * @file ding_library_map.tpl.php
 * Library location, map, etc.
 */
drupal_add_css(drupal_get_path('module', 'ding_library_map') .'/css/ding_library_map.css', 'module');
drupal_add_js(drupal_get_path('module', 'ding_library_map') .'/js/ding_library_map.js', 'module');


//setup map
$mapId = 'library_map';
$map = array('id' => $mapId, 'type' => 'map', 'zoom' => 12, 'minzoom' => 9, 'maxzoom' => 14, 'height' => '200px', 'width' => '100%', 'controltype' => 'Small', 'longitude' => '12.573448', 'latitude' => '55.680908', 'behavior' => array('extramarkerevents' => 1));

//add markers for libraries
foreach ($nodes as $node)
{
	$marker = array('latitude' => $node->location['latitude'], 
									'longitude' => $node->location['longitude'], 
									'markername' => 'ding_library_map_open',
									'name' => $node->title,
									'street' => $node->location['street'], 
									'city' => $node->location['city'], 
									'postal-code' => $node->location['postal_code'],
									'opening_hours' => $node->field_opening_hours[0], //TODO replace with active opening hours
									'state' => 'open', 
									'url' => url('node/'.$node->nid),
									'text' => FALSE);
	$map['markers'][] = $marker;
}

?>
<?php echo theme('gmap', $map) ?>
<script type="text/javascript">
	var options = { fullDayNames: {	'mon': '<?php echo t('Monday') ?>',
									 								'tue': '<?php echo t('Tuesday') ?>',
																	'wed': '<?php echo t('Wednesday') ?>',
																	'thu': '<?php echo t('Thursday') ?>',
																	'fri': '<?php echo t('Friday') ?>',
																	'sat': '<?php echo t('Saturday') ?>',
																	'sun': '<?php echo t('Sunday') ?>' },
									shortDayNames: {	'mon': '<?php echo t('Mon') ?>',
						 		 										'tue': '<?php echo t('Tue') ?>',
										 								'wed': '<?php echo t('Wed') ?>',
										 								'thu': '<?php echo t('Thu') ?>',
										 								'fri': '<?php echo t('Fri') ?>',
										 								'sat': '<?php echo t('Sat') ?>',
										 								'sun': '<?php echo t('Sun') ?>' }
	};
								
	$(document).ready(function()
	{
		Drupal.dingLibraryMap('<?php echo $mapId; ?>', options)
	});
</script>