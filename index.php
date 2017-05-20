<?php
 error_reporting(0); 

$html = file_get_contents('https://dashboard.heroku.com/apps/nthsysc/deploy/github');
$dom = new domDocument;
$dom->loadHTML($html);
$dom->preserveWhiteSpace = false;
$images = $dom->getElementsByTagName('img');
foreach ($images as $image) {
	echo "<pre>";
  echo $image->getAttribute('src');

}
?>

