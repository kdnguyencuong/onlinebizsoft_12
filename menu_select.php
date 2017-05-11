<?php 
	require_once (__DIR__.'/menu_class.php');
	class Select extends Menu{
		public function __construct(){
			parent::__construct();
			$this->data = $this->db_get_list();	
		}
	}
?>