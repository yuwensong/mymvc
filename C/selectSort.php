<?php 
$arr = array(1,9,8,7,3,6,5);
function selectSort($arr){
	if(empty($arr)){
		return ;
	}
	for($i=0; $i<count($arr)-1; $i++){
		$min = $arr[$i];	//假设他是最小的
		$pos = $i;
		for($j=$i+1; $j<count($arr); $j++){
			if($min>$arr[$j]){
				$min = $arr[$j];
				$pos = $j;
			}
		}
		
		//交换
		$arr[$pos] = $arr[$i];
		$arr[$i] = $min;
	}

	return $arr;
}

//开始
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<pre>";
print_r(selectSort($arr));
echo "</pre>";

?>