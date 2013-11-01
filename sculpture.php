<?php
require_once('include/render-page.php');

$content = $GLOBALS['availableSculptures'][$_GET['title']];

ob_start();
foreach($content['filenames'] as $filename)
{
?>
		<div class="centerpieceWrapper">
			<img src="/art/sculptures/<?php echo $filename;?>"/>
		</div>
<?php
}
?>

		<div class="caption">
			<?php include_once('sculptures/captions/' . $content['caption']); ?>
		</div>

<?php
renderPage(ob_get_clean());
?>