<?php
require_once('include/render-page.php');

ob_start();
// foreach($content as $filename)
// {
?>
		<div class="centerpieceWrapper">
				<?php include_once('jssor.slider/image-gallery-with-vertical-thumbnail.source_edit.html'); ?>
		</div>

<?php
// }

renderPage(ob_get_clean());
?>