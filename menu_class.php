<?php header('Content-Type: text/html; charset=utf-8');

	class Menu{
		private $__conn;
		public $data;
		
		//Hàm kết nối
		function __construct(){
			try {

			    $this->__conn = new PDO('mysql:host=localhost;dbname=php_example;charset=utf8','root','');
			    //echo 'Kết nối thành công';

			} catch (PDOException $e) {
			    print "Error!: " . $e->getMessage() . "<br/>";
			    die();
			}
		}

		//Hàm ngắt kết nối
		function __destruct(){
			$this->__conn = null;
		}

		function insert($table,$data){
			//Lưu trữ danh sách field
			$field_list = '';

			//Lưu trữ danh sách giá trị tương ứng với field
			$value_list = '';

			foreach ($data as $key => $value) {
				//var_dump($value);
				$field_list .= ','.$key;
				$value_list .= ','.$this->__conn->quote($value);
			}

			$field_key = trim($field_list, ',');
			$field_val = trim($value_list, ',');
			//var_dump($field_val);
			//Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa 1 dấu ,nên ra sẽ dùng hàm 
			//trim để xóa đi
			$sql = "INSERT INTO $table($field_key) VALUES ($field_val)";
			//var_dump($sql);
			$stmt = $this->__conn->exec($sql);
			return $stmt;
		}

		function db_get_list(){
			$command = "SELECT * FROM menu";
			$sql = $this->__conn->prepare($command);
			$sql->execute();
			//$result = $sql->fetchAll();
			$data = array();
			if ($sql->rowCount() > 0) {
				while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
					$data[] = $row;
				}
			}

			return $data;

		}
	}

	// $data = array('menu_name'=>'áda','parent_id'=>0);
	// $menu = new Menu($data);

	// $menu->connect();


?>