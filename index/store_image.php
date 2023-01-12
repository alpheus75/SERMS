<?php

$img = $_POST['image'];
$folderPath = "../scenes/";

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);

$fileName = uniqid() . '.jpeg';
$file = $folderPath . $fileName;

$upload = file_put_contents($file, $image_base64);
if (file_put_contents($file, $upload)) {
	echo '<script language="javascript">';
	echo 'alert("Incident image received!");';
	echo 'window.location="dashboard.php";';
	echo '</script>';
}else{
	echo '<script language="javascript">';
	echo 'alert("Failed to upload the image!");';
	echo 'window.location="image_index.php";';
	echo '</script>';
}

?>