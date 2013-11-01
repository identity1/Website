<?php
require_once('include/render-page.php');

$content = $GLOBALS['availablePrints'][$_GET['title']];

ob_start();
foreach($content['filenames'] as $filename)
{
?>
		<div class="centerpieceWrapper">
			<img src="/art/prints/<?php echo $filename;?>"/>
		</div>
<?php
}
?>

		<div class="caption">
			<?php include_once('prints/captions/' . $content['caption']); ?>
		</div>

<?php
renderPage(ob_get_clean());
?>