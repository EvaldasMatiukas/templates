<pre><?php

function format_nr($a) {
	$gabalai = explode(" ", $a);
	print_r($gabalai);

	$gabalai[0] = "86";
	$gabalai = implode(" ", $gabalai);
	print_r($gabalai);

}

$naujas_formatas = format_nr("+370 6AA BBBBB");