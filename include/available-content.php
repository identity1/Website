<?php
// the /images/photos folder should have these files, 
// and there's a /thumbnails folder inside that folder which has images with the same name.
$GLOBALS['availablePhoto'] = array(
	'Title' =>				'little one_20130918.jpg',
	'Groundwater' => 		'groundwater_20130918.jpg',
	'Russian Doll' =>		'russian doll_20130924.jpg',
);
$GLOBALS['availableDrawings'] = array(
	'Airport' =>			'airport_20130917.jpg',
	'Pop' => 				'pop_20130918.jpg',
	'Undone' =>				'undone_20130918.jpg',
);
$GLOBALS['availableSculpture'] = array(
	'Creature' =>			array('filenames' => 'creature_20131025.jpg', 
							'caption' => 'creature.txt'),
	'Monitor' => 			array('filenames' => 'monitor_20131025.jpg', 
							'caption' => 'monitor.txt'),
	'Three generations' =>	array('filenames' => 'three-generations_20131025.jpg',
							 'caption' => 'three-generations.txt'),
);
$GLOBALS['availablePrints'] = array(
	'Zenbryonic' =>			array('filenames' => array(
								'zenbryonic (brown)',
								'zenbryonic(wraith grey)'), 
								'caption' => 'zenbryonic.txt')),
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