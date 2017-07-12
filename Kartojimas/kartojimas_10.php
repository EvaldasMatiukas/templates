<pre><?php  // padaryti kiek liko laiko iki Kaledu ir iki rugsejo 1 d.

echo date("l") . "<br>";

echo date("l jS \of F Y h:i:s A") . "<br>";

echo date("z", mktime(0, 0, 0, 9, 1, 2025)) + 1 . "<br />";
echo date ("z") + 1;
