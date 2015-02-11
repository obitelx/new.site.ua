<?php
	$dirname = dirname(__FILE__);
	$replace = str_replace('\\', '/', $dirname);
	define(ROOT, $replace);