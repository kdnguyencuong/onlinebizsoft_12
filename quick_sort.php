<?php 
	function quick_sort($my_array){

		$left_small = $right_big = array();

		if(count($my_array) < 2){
			return $my_array;
		}
		$pivot = array_shift($my_array);

		$pivot_key = key($my_array);

		

		$n = count($my_array);

		for($i = 0;$i < $n;$i++){
			if($my_array[$i] < $pivot){
				$left_small[] = $my_array[$i];  
			}else{
				$right_big[] = $my_array[$i];
			}
		}

		return array_merge(quick_sort($left_small),array($pivot_key=>$pivot),quick_sort($right_big));

		// echo $pivot.'<br>';
		// echo '<pre>';
		// print_r($left_small);
		// echo '</pre>';
		// echo '<br>';
		// echo '<pre>';
		// print_r($right_big);
		// echo '</pre>';
	}

	$my_array = array(6,-2,3,7,8,0,5);

	echo 'Mảng trước khi sắp xếp nổi bọt là :'.implode(',',$my_array);
	echo '<br>';
	echo 'Mảng sau khi sắp xếp nổi bọt là :'.implode(',', quick_sort($my_array));
?>