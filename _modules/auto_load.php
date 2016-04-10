<?php
	function __autoload($CLASS_NAME)
	{
		if(file_exists('_modules/_classes/' . $CLASS_NAME . '.php'))
		{
			require_once('_modules/_classes/' . $CLASS_NAME . '.php');
		}
	}
?>
