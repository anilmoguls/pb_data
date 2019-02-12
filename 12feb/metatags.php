<?php
if ($_SERVER['REQUEST_URI'] == '/') {
	$metatitle = "7 Apple Hotel - Test";
    $metadesc = "Test";
	$metakeywords="Test";
} 
elseif ($_SERVER['REQUEST_URI'] == '/experience.php') {
	$metatitle = "7 Apple Hotel - Test";
    $metadesc = "7 Apple Hotel - Test";
	$metakeywords="7 Apple Hotel - Test";
}
else {
    $metatitle = "7 Apple Hotel - Test";
    $metadesc = "7 Apple Hotel - Test";
}
?>