<?php
function number1($arr){
	var_dump($arr);
}
function number2($arr){
	for(;$value = current($arr); next($arr)){
		echo $value." ";
		
	}
}
function number3($arr){
	$array = $arr;
	while(!empty($array)){
		echo array_shift($array)." ";
	}
}
function number4($arr){
	$keys = array_keys($arr);
	for($i = 0; $i < count($keys); $i++){
		echo $arr[$keys[$i]]." ";
	}
}
function number5($arr){
	$values = array_values($arr);
	for($i = 0; $i < count($values);$i++){
		echo $values[$i]." ";
	}
}
function number6($arr){
	echo join($arr," ");
}
function print_element($element){
	echo $element." ";
}
function number7($arr){
	array_walk($arr,'print_element');
}
function number8($arr){
	reset($arr);
	while(list($key,$value) = each($arr)){
		echo $value." ";
	}
}
function number9($arr){
	echo implode(" ",$arr);
}
function number10($arr){
	array_filter($arr,'print_element');
}
$arr = array("h" => ".", "t" => "p", "M" => "H", "L" => "P");
for($i = 1; $i <= 10; $i++){
	echo $i.": ";
	call_user_func('number'.$i, $arr);
	echo "<br>";
}

?>