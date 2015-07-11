<?php
require_once('include/render-page.php');


ob_start();
?>
<br/>
<img src="/images/placeholder.png"/>

<?php
renderPage(ob_get_clean());
?>