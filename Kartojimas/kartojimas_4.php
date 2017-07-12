<pre><?php
$skaiciai = array("1", "25", "11", "3", "7", "0", "2");

print_r ($skaiciai);

array_search($array, $element);

$position_in_array = array_search($skaiciai, $array);

if($position_in_array != false ) {
	echo $position_in_array;
}
	else {
		echo "elementas nerastas";
	}