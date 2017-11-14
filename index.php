<?php
spl_autoload_register('autoload');
function autoload($class){
	require str_replace('\\', '/', $class).'.php';
}
/*$user = IMooc\Factory::getUser(2);
var_dump($user->getInformation());*/

/*$users = new \Lib\ALLUser();
foreach ($users as $value) {
	# code...
	var_dump($value);
	echo '<hr>';
}*/

/*$index = new \App\controller\Index();
$index->index();*/
$hello = \Lib\Application::getInstance();
$hello->run();