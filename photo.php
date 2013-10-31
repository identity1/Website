<?php
require_once('include/render-page.php');

renderPage('<img src="/images/photos/' . $availablePhotos[$_GET['title']] . '"/>');
?>