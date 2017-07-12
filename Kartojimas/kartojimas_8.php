<pre><?php


$a = [
['name' => 'Delfi', 'url' => 'http://delfi.lt'],
['name' => '15min', 'url' => 'http://15min.lt'],
['name' => 'Code Academy', 'url' => 'http://codeacademy.lt']
];

function pirnt_links ($a) {
	foreach ($a as $link) {
		echo '<a href="'.$link['url'].'" >" .$link['name'].'<a><br />';
	}
}