<?php

	function __autoload($class){
		$filename=$class.'.php';
		require_once $filename;
	}


?>