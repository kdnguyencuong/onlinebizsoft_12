<?php 
	require_once (__DIR__.'/menu_class.php');

	class Dequi extends Menu{

		public function parent($data,$parent_id = 0, $char = ''){
			
			foreach ($data as $key => $item) {
				//Nếu là chuyên mục con thì sẽ hiển thị
				 // var_dump($item);
				if($item['parent_id'] == $parent_id){
					echo '<option value="'.$item['menu_id'].'">';
		                echo $char . $item['menu_name'];
		            echo '</option>';

		            unset($data[$key]);

		            $this->parent($data,$item['menu_id'],$char.'|--');
		            
		        }
			}
		}

		public function tree($data,$parent_id = 0,$char=''){
			foreach ($data as $key => $item) {
				if($item['parent_id'] == $parent_id){
					echo '<tr>';	
						echo '<td>';
							echo $char.$item['menu_name'];
							$this->tree($data,$item['menu_id'],$char.'|--');
						echo '</td>';
					echo '</tr>';
				}
			}
		}
	}
?>