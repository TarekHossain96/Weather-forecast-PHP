<?php
 spl_autoload_register(function($class){
	include_once "libs/".$class.".php";
});
?>
<?php include_once "app/config/config.php";?>
<?php
 $main = new Main();
?>

