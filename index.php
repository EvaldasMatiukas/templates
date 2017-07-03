<?php

$title = "Evaldo puslapis";
$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper enim dui, in rhoncus nisl pellentesque eget. Aliquam erat volutpat. Sed elementum velit mi, a congue nisi varius vel. In hac habitasse platea dictumst. Cras mollis orci ac magna congue feugiat. Fusce in convallis sapien. In hac habitasse platea dictumst. Duis et tincidunt odio, et vestibulum leo.

Integer rutrum orci ullamcorper nulla vulputate, quis consequat leo laoreet. Curabitur faucibus, risus a dignissim lobortis, sapien lacus mollis purus, eu imperdiet felis velit at urna. Proin tortor tortor, mollis in nisi a, auctor tempus libero. Nullam venenatis interdum arcu, luctus malesuada metus placerat et. Nulla facilisi. Praesent pulvinar, diam at tempus accumsan, lectus dolor cursus tellus, eget tempus sem lorem eu nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et sem ligula. Sed et ipsum eros. Aenean sed mollis mauris. Aliquam vitae tristique urna. Etiam aliquam ex enim, vitae porta arcu porta id. Phasellus sodales elementum ex, at venenatis mauris ultrices in. Proin ac velit lectus.";

$templates = ["green", "orange", "pink"];

$template_name = $_GET['t'];

include 'templates/' .$template_name.'.php';

//include "templates/orange.php";
//include "templates/green.php";
//include "templates/pink.php";
?>