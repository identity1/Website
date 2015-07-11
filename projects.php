<?php
require_once('include/render-page.php');

$content = $GLOBALS['availableProjects'][$_GET['title']];

ob_start();
foreach($content['filenames'] as $filename)
{
?>
		<div class="centerpieceWrapper">
			<img src="/art/projects/<?php echo $filename;?>"/>
		</div>
<?php
}
?>

		<div class="caption">
			<?php include_once('projects/captions/' . $content['caption']); ?>
		</div>

<?php
renderPage(ob_get_clean());
?>