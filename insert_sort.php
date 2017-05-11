<?php 
	function insert_sort($my_array){
		
		$n= count($my_array);

		for ($i=0; $i < $n-1; $i++) {
			$result = array(); 
			for($j = 0;$j < $n-1;$j++){
				if($my_array[$j+1] < $my_array[$j]){
					$temp = $my_array[$j];
					$my_array[$j] = $my_array[$j+1];
					$my_array[$j+1] = $temp;
				}
				$result[] = $my_array[$j];
				for($k = 0;$k < count($result);$k++){
					if($my_array[$k] > $my_array[$k+1]){
						$temp = $my_array[$k];
						$my_array[$k] = $my_array[$k+1];
						$my_array[$k+1] = $temp;
					}
				}
			}
		}

		return $my_array;
	}

	$my_array = array(3,8,1,4,2,9,-3);

	echo 'Mảng trước khi sắp xếp nổi bọt là :'.implode(',',$my_array);
	echo '<br>';
	echo 'Mảng sau khi sắp xếp nổi bọt là :'.implode(',', insert_sort($my_array));
?>