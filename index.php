<?php

session_start();

$title = "Evaldo puslapis";
$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper enim dui, in rhoncus nisl pellentesque eget. Aliquam erat volutpat. Sed elementum velit mi, a congue nisi varius vel. In hac habitasse platea dictumst. Cras mollis orci ac magna congue feugiat. Fusce in convallis sapien. In hac habitasse platea dictumst. Duis et tincidunt odio, et vestibulum leo.

Integer rutrum orci ullamcorper nulla vulputate, quis consequat leo laoreet. Curabitur faucibus, risus a dignissim lobortis, sapien lacus mollis purus, eu imperdiet felis velit at urna. Proin tortor tortor, mollis in nisi a, auctor tempus libero. Nullam venenatis interdum arcu, luctus malesuada metus placerat et. Nulla facilisi. Praesent pulvinar, diam at tempus accumsan, lectus dolor cursus tellus, eget tempus sem lorem eu nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et sem ligula. Sed et ipsum eros. Aenean sed mollis mauris. Aliquam vitae tristique urna. Etiam aliquam ex enim, vitae porta arcu porta id. Phasellus sodales elementum ex, at venenatis mauris ultrices in. Proin ac velit lectus.";

$templates = ["green", "orange", "pink"];

if (isset($_GET['username'])) {
	$title = "Cia lankosi " . $_GET['username'];
	$_SESSION['user'] = $_GET['username'];
} elseif (isset($_SESSION['user'])){
	$title = "Cia lankosi " . $_SESSION['user'];
}

if (isset($_GET['t'])) {
	$template_name = $_GET['t'];
	$_SESSION['session_template'] = $_GET['t'];
		} else if (isset($_SESSION['session_template'])) {
			$template_name = $_SESSION['session_template'];
	} else {
	$template_name = $templates[0];
	}
include $template_name .'.php';?>
