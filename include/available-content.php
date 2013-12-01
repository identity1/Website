<?php
// the /images/photos folder should have these files, 
// and there's a /thumbnails folder inside that folder which has images with the same name.
$GLOBALS['availablePhotos'] = array(
	'Little One' =>				array( 'filenames' => array('little-one.jpg'), 'caption' => 'little-one.html' ),
	'Groundwater' => 		array( 'filenames' => array('groundwater.jpg'), 'caption' => 'groundwater.html' ),
	'Russian Doll' =>		array( 'filenames' => array('russian-doll.jpg'), 'caption' => 'russian-doll.html' ),
);
$GLOBALS['availableDrawings'] = array(
	'Airport' =>			array( 'filenames' => array('airport.jpg'), 'caption' => 'airport.html' ),
	'Pop' => 				array( 'filenames' => array('pop.jpg'), 'caption' => 'pop.html' ),
	'Undone' =>				array( 'filenames' => array('undone.jpg'), 'caption' => 'undone.html' ),
);
$GLOBALS['availableSculptures'] = array(
	'Creature' =>			array('filenames' => array('creature.jpg'), 'caption' => 'creature.html'),
	'Monitor' => 			array('filenames' => array('monitor.jpg'), 'caption' => 'monitor.html'),
	'Three generations' =>	array('filenames' => array('three-generations.jpg'), 'caption' => 'three-generations.html'),
);
$GLOBALS['availablePrints'] = array(
	'Zenbryonic' =>			array('filenames' => array(
									'zenbryonic_brown.jpg',
									'zenbryonic_wraith-grey.jpg'), 
								'caption' => 'zenbryonic.html'),
);
$GLOBALS['availableWords'] = array(
	'Cavern' =>				'cavern.html',
	'Debug' =>				'debug.html',
	'Dialogue' =>			'dialogue.html',	
	'Gather round' =>		'gather-round.html',
	'Rocket' =>				'rocket.html',
	'Great flood' =>		'great-flood.html',
	'Silence' =>			'silence.html',
	'Talking rain' =>		'talking-rain.html',
	'Word' =>				'word.html',
);
?>