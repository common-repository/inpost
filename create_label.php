<?php
require_once "includes/inpostparcelsHelper.php";

$key    = $_GET['api_key'];
$url    = $_GET['api_url'];
$id     = $_GET['parcel_id'];
$format = $_GET['format'];
$type   = $_GET['type'];

// Check that the data received is good
if ($key == null || $key == '' || strlen($key) < 30)
{
	echo "<h1>API KEY is not valid</h1>";
	die;
}
if ($url == null || $url == '' || strlen($url) < 10)
{
	echo "<h1>API URL is not valid</h1>";
	die;
}
if ($id == null || $id == '' || strlen($id) < 5)
{
	echo "<h1>API URL is not valid</h1>";
	die;
}
if ($format == null || $format == '' || (strcasecmp($format, 'Pdf') != 0 &&
	strcasecmp($format, 'Epl2' != 0)) )
{
	echo "<h1>Label format is not valid</h1>";
	die;
}
if ($type == null || $type == '' || (strcasecmp($type, 'normal') != 0 &&
	strcasecmp($type, 'A6P' != 0)) )
{
	echo "<h1>Label type is not valid</h1>";
	die;
}

$params = array(
	'url' => $url . 'stickers/' . $id,
	'token' => $key,
	'methodType' => 'GET',
	'params'     => array(
		'format' => $format,
		'id'     => $id,
		'type'   => $type,
	),
);

$reply = inpostparcelsHelper::connectInpostparcels($params);

$name = $id . ".pdf";

$label = $reply['result'];

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="'.$name.'"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');

echo base64_decode($label);

