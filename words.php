<?php
require_once('include/render-page.php');

$filename = $GLOBALS['availableWords'][$_GET['title']];

ob_start();
// foreach($content as $filename)
// {
?>
		<div class="centerpieceWrapper">
			<div class="exaltedWords">
				<?php include_once('words/' . $filename); ?>
			</div>
		</div>

<?php
// }

renderPage(ob_get_clean());
?>