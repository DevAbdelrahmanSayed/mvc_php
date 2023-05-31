<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__).DS);
define("APP",ROOT."app".DS);
define("CONTROLLER",APP."controllers".DS);
define("CORE",APP."core".DS);
define("MODEL",APP."models".DS);
define("VIEW",APP."views".DS);
define("CONFIG",APP."config".DS);
define("ASSETS","http://localhost/mvc/public/assets/");
define("REGISTRATION_PAGE",CONTROLLER ."Registration.php");
// config 
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","utf8");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://localhost/MVC/");


require_once('../vendor/autoload.php');


$body=new BLOG\core\App();
