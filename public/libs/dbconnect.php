<?php
if(!defined('mnminclude')){header('Location: ../error_404.php');die();}

define("EZSQL_DB_USER", "root");
define("EZSQL_DB_PASSWORD", "123");
define("EZSQL_DB_NAME", "plikli");
define("EZSQL_DB_HOST", "localhost");
if (!function_exists('gettext')) {
	function _($s) {return $s;}
}
?>