<?php
	require __DIR__ .'/vendor/autoload.php';
	
	use Liliatux\App\Foo\Client as FooClient;
	use Liliatux\App\Bar\Client as BarClient;
	
	echo (new FooClient())->render();
	echo "\n";
	echo (new BarClient())->render();
?>
