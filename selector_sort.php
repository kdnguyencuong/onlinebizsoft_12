<?php 
	
	function selector_sort($my_array){
		

		$pivot = array_shift($my_array);

		$pivot_key = key($my_array);

		if($pivot == ''){
			return $my_array;
		}

		$n = count($my_array);


		for($i = 0;$i<$n-1;$i++){

			/* thiết lập phần tử hiện tại là min*/
			$min = $i;

			/* kiểm tra phần tử có là nhỏ nhất không */
			for($j=$i+1;$j<$n;$j++){
				if($my_array[$j] < $my_array[$min]){
					$min = $j;
				}
			}

			if($my_array[$min] < $pivot){
				$temp = $pivot;
				$pivot = $my_array[$min];
				$my_array[$min] = $temp;
			}
		}

		return array_merge(array($pivot_key=>$pivot),selector_sort($my_array));
	}

	$my_array = array(-1,6,3,2,8,9);
	
	echo 'Mảng trước khi sắp xếp nổi bọt là :'.implode(',',$my_array);
	echo '<br>';
	echo 'Mảng sau khi sắp xếp nổi bọt là :'.implode(',', selector_sort($my_array));
?>