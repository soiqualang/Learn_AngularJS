<?php
/*
$imgsrc='https://picsum.photos/200/';
$imginfo = getimagesize($imgsrc);
header("Content-type: {$imginfo['mime']}");
readfile($imgsrc);
*/


$image = 'https://picsum.photos/400';
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
//$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
$src = 'data: '.';base64,'.$imageData;

// Echo out a sample image
//echo '<img src="' . $src . '">';
echo $src;
//echo '<h1>jhkjhhkl</h1>';
?>