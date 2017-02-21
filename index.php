<?php

require __DIR__ . '/vendor/autoload.php';

use App\Router;

$controller = new Router($_GET);
$controller = $controller->createController();
$controller->executeAction();

require 'app/Views/header.php';
require 'app/Views/nav.php';

?>

<section class="container">
	<article class="col col-1">
		<?php $controller->executeView(); ?>
	</article>
	<?php include 'app/Views/sidebar.php' ?>	
</section>
