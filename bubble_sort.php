<?php 
	

	function bubble_sort($my_array){
		$n = count($my_array);
		for ($i=0; $i < $n -1; $i++) { 
			$swapped = false;
			for($j = 0;$j < $n -1;$j++){
				if($my_array[$j] > $my_array[$j+1]){
					$temp = $my_array[$j];
					$my_array[$j] = $my_array[$j+1];
					$my_array[$j+1] = $temp;

					$swapped = true;
				}


			}

			if(!$swapped){
				break;
			}
		}

		return $my_array;
	}

	$my_array = array(2,0,7,1,8,6,9);

	echo 'Mảng trước khi sắp xếp nổi bọt là :'.implode(',',$my_array);
	echo '<br>';
	echo 'Mảng sau khi sắp xếp nổi bọt là :'.implode(',', bubble_sort($my_array));
?>