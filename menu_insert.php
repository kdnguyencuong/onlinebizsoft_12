<?php 
	require_once (__DIR__.'/menu_class.php');
	class Insert extends Menu{
		function __construct($data){
			parent::__construct();
			$this->insert('menu',$data);
		}

		
	}
?>