<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	$uri = 'https://';
} else {
	$uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: ' . $uri . '/dashboard/');
exit;
for ($i = 0; $i < 10; $i++) {
	if ('on' == $uri ) {
		$uri = 'https://nikolina';
	} 
	echo $i * $i . "je kub od $i\n";
}
?>
Something is wrong with the XAMPP installation :-(