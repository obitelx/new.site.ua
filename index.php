<?php
	class Core {
		public $x;
		
		public function __construct($x) {
			if (file_exists($x)) {
				echo '1';
			}
			else {
				echo '2';
			}
		}
	}
	
	$obj = new Core('W:\domians\new.site.ua');
	echo $obj;
?>