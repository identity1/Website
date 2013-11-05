<?php
require_once('available-content.php');

function renderPage($stageContent = '<h3>Placeholder</h3>')
{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="title" content="InsidesOut" />
		<meta name="description" content="A few articles of work on Insides-Out." />
		<link rel="stylesheet" type="text/css" href="/style/root.css" />
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
	</head>
	
	<body>
		<div id="wordGenerator">

		</div>

		<div id="wrapper">
			<div id="leftColumn">
				<div class="logo">
					<img src="/images/logo.png"/>
				</div>
				
				<div class="navigation">
					<ul>
						
						<li class="section">Drawings</li>
<?php
	foreach ($GLOBALS['availableDrawings'] as $title => $filename) {
		echo '<li> <a href="/drawings.php?title=' . $title . '">' . $title . '</a></li>';
	}
?>
						<li class="section">Sculpture</li>
<?php
	foreach ($GLOBALS['availableSculptures'] as $title => $filename) {
		echo '<li> <a href="/sculpture.php?title=' . $title . '">' . $title . '</a></li>';
	}
?>
						<li class="section">Photo</li>
<?php
	foreach ($GLOBALS['availablePhotos'] as $title => $filename) {
		echo '<li> <a href="/photo.php?title=' . $title . '">' . $title . '</a></li>';
	}
?>						
						<li class="section">Prints</li>
<?php
	foreach ($GLOBALS['availablePrints'] as $title => $filename) {
		echo '<li> <a href="/prints.php?title=' . $title . '">' . $title . '</a></li>';
	}
?>						
						<li class="section">Words</li>
<?php
	foreach ($GLOBALS['availableWords'] as $title => $filename) {
		echo '<li> <a href="/words.php?title=' . $title . '">' . $title . '</a></li>';
	}
?>
					</ul>
				</div> <!-- .navigation -->
				
			</div> <!-- #leftColumn -->
			
			<div id="rightColumn">
				<div id="pages">
				
					<a href="/work">work</a>
					<a href="http://blog.insidesout.com">blog</a>
					<a href="/info">info</a>
					<a href="/projects">projects</a>
					
					<div class="clear"></div>
				</div> <!-- #pages -->
				
				<div id="stage">
					<?php echo $stageContent;?>
				</div>
				
				
			</div> <!-- #rightColumn -->
			
		</div> <!-- wrapper -->

		<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
		<script type="text/javascript">
			$( document ).ready(function() {
				var pairs = [
					['icelandic', 'origins'], 
					['ide', 'ology'], 
					['imperial', 'official'], 
					['in', 'orbit'], 
					['inanimate', 'object'], 
					['incestuous', 'orgy'], 
					['incestuous', 'orphan'], 
					['independent', 'operant'], 
					['individual', 'odds'], 
					['infantile', 'oddity'], 
					['infinite', 'options'], 
					['inn', 'oculate'], 
					['input', 'output'], 
					['insert', 'object'], 
					['inside', 'out'], 
					['insides', 'out'], 
					['instant', 'orgasm'], 
					['instant', 'outcast'], 
					['intellectual', 'organism'], 
					['invert', 'option'], 
					['invert', 'order'], 
					['inverted', 'orb'], 
					['involuntary', 'orgasm'], 
					['itchy', 'orifice'], 
					['industrial', 'operation'], 
					['i', 'ota'], 
					['iron', 'oxide'], 
					['internal', 'organs']
				];

				var eyes = [
					'ice',
					'ichthyosis',
					'id',
					'idea',
					'idea',
					'ideal',
					'identity',
					'idle',
					'ideopraxist',
					'ignite',
					'ikat',
					'ill',
					'illegal',
					'illusion',
					'imbalanced',
					'imitate',
					'immaculate',
					'immersion',
					'imminent',
					'immunity',
					'imperial',
					'impossible',
					'impotent',
					'impression',
					'impulse',
					'in',
					'incidental',
					'incidental',
					'incline',
					'inchworm',
					'incubate',
					'indecent',
					'indefinite',
					'independent',
					'index',
					'indigo',
					'individual',
					'induce',
					'inertia',
					'infant',
					'infest',
					'infiltrate',
					'infinite',
					'influx',
					'infrared',
					'ingrown',
					'inhabit',
					'initial',
					'inject',
					'ink',
					'inkling',
					'inner',
					'innocent',
					'inoperable',
					'inorganic',
					'insect',
					'insert',
					'instant',
					'instantaneous',
					'instructional',
					'intellectual',
					'inter',
					'interactive',
					'intercourse',
					'intermittent',
					'interstitial',
					'intertidal',
					'intestinal',
					'intimate',
					'intimate',
					'invent',
					'invert',
					'investigate',
					'invisible',
					'involuntary',
					'iridium',
					'iris',
					'irrational',
					'irrational',
					'irreverent',
					'isinglass'
					];

				var ohs = [
					'object',
					'objectivism',
					'oblong',
					'obscurity',
					'obsequious',
					'obstacle',
					'obtuse',
					'occidentalis',
					'ocean',
					'ochre',
					'octane',
					'octave',
					'octopod',
					'odds',
					'oddball',
					'of',
					'office',
					'official',
					'once',
					'onion',
					'ooze',
					'open',
					'opening',
					'operand',
					'operator',
					'option',
					'orbit',
					'order',
					'order',
					'organ',
					'organic',
					'organism',
					'orgasm',
					'orifice',
					'origin',
					'original',
					'orphan',
					'orthogonal',
					'osmosis',
					'ossicle',
					'outcast',
					'overgrowth',
					'oversimplification',
					'overture',
					'ovulate',
					'oxyacanthous'
					];

				var randomPairs = [];
				for (var i=0; i<pairs.length; i++) {
					var eye = eyes[ (Math.floor(Math.random() * eyes.length)) ]
					var oh = ohs[ (Math.floor(Math.random() * ohs.length)) ]
					randomPairs.push([eye, oh]);
				}
				pairs = pairs.concat(randomPairs);
				var randomPair = pairs[Math.floor(Math.random() * pairs.length)]
				$("#wordGenerator").text(randomPair[0], randomPair[1]);
			});
		</script>
	</body>
</html>
<?php
}
?>