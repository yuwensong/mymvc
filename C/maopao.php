<?php
/*
 * 比较相邻的两个数，小的往前交换，大的往后交换
 */
function maopao($arr){
	if(!is_array($arr)){
		return;
	}
	$length = count($arr);
	for($i=0; $i<$length; $i++){
		for($j=0; $j<9; $j++){
			if($arr[$j]>$arr[$j+1]){
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $temp;
			}
		}
	}
	
	return $arr;
}

$arr = array(
		3, 10, 2, 6, 9, 4, 1, 7, 8, 5
	);

print_r(maopao($arr));
?>