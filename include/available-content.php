<?php
// the /images/photos folder should have these files, 
// and there's a /thumbnails folder inside that folder which has images with the same name.
$GLOBALS['availablePhotos'] = array(
	'Liber' =>				array( 'filenames' => array('liber.jpg'), 'caption' => 'liber.html' ),
	'Little one' =>				array( 'filenames' => array('little-one.jpg'), 'caption' => 'little-one.html' ),
	'Groundwater' => 		array( 'filenames' => array('groundwater.jpg'), 'caption' => 'groundwater.html' ),
	'Speckled pup' => 		array( 'filenames' => array('speckled-pup.jpg'), 'caption' => 'speckled-pup.html' ),
	'Russian doll' =>		array( 'filenames' => array('russian-doll.jpg'), 'caption' => 'russian-doll.html' ),
	'*Snapshots' =>		array('filenames' => array('s1.jpg'), 'caption' => '*snapshots.html'),
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
	'Zenbryonic' =>			array('filenames' => array('zenbryonic.jpg'), 'caption' => 'zenbryonic.html'),
);
$GLOBALS['availableWords'] = array(
	'Cavern' =>				'cavern.html',
	'Debug' =>				'debug.html',
	'Dialogue' =>			'dialogue.html',	
	'Gather round' =>		'gather-round.html',
	'Great flood' =>		'great-flood.html',
	'Rocket' =>				'rocket.html',
	'Silence' =>			'silence.html',
	'Talking rain' =>		'talking-rain.html',
	'Word' =>				'word.html',
);
$GLOBALS['availableProjects'] = array(
	'Discretized' =>	array('filenames' => array('d1.jpg')),
	'Artchive' =>			array('filenames' => array('coki.jpg')),
);
?>