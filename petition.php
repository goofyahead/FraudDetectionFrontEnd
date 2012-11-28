<?php
	$url = $_GET['url'];
    $petition='http://elchudi.xen.prgmr.com/' . $url;
    if($url!="")
		echo header('Content-Type: application/json');
		echo json_encode(utf8_encode(str_replace("'", '"', file_get_contents($petition))));
		//echo utf8_encode(str_replace("'", '"', file_get_contents($petition)));
		//echo json_encode(utf8_encode(('{"one": "Singular sensation","two": "Beady little eyes","three": "Little birds pitch by my doorstep"}')));
		//echo str_replace("'", '"', file_get_contents($url));
?>