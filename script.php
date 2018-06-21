<?php

$file = 'your-file.html';

// special characters array
$data = array(
	array(
		"À",
		"&Agrave;"
	),
	array(
		"Á",
		"&Aacute;"
	),
	array(
		"Â",
		"&Acirc;"
	),
	array(
		"Ã",
		"&Atilde;"
	),
	array(
		"Å",
		"&Aring;"
	),
	array(
		"Ç",
		"&Ccedil;"
	),
	array(
		"È",
		"&Egrave;"
	),
	array(
		"É",
		"&Eacute;"
	),
	array(
		"Ê",
		"&Ecirc;"
	),
	array(
		"Í",
		"&Iacute;"
	),
	array(
		"Ò",
		"&Ograve;"
	),
	array(
		"Ó",
		"&Oacute;"
	),
	array(
		"Ô",
		"&Ocirc;"
	),
	array(
		"Õ",
		"&Otilde;"
	),
	array(
		"Ù",
		"&Ugrave;;"
	),
	array(
		"Ú",
		"&Uacute;"
	),
	array(
		"Û",
		"&Ucirc;"
	),
	array(
		"à",
		"&agrave;"
	),
	array(
		"á",
		"&aacute;"
	),
	array(
		"â",
		"&acirc;"
	),
	array(
		"ã",
		"&atilde;"
	),
	array(
		"ç",
		"&ccedil;"
	),
	array(
		"è",
		"&egrave;"
	),
	array(
		"é",
		"&eacute;"
	),
	array(
		"ê",
		"&ecirc;"
	),
	array(
		"ì",
		"&igrave;"
	),
	array(
		"í",
		"&iacute;"
	),
	array(
		"ñ",
		"&ntilde;"
	),
	array(
		"ò",
		"&ograve;"
	),
	array(
		"ó",
		"&oacute;"
	),
	array(
		"ô",
		"&ocirc;"
	),
	array(
		"õ",
		"&otilde;"
	),
	array(
		"ù",
		"&ugrave;"
	),
	array(
		"ú",
		"&uacute;"
	),
	array(
		"û",
		"&ucirc;"
	)
);

echo 'starting loop <br>';

//for each position of the array replaces incidents
foreach($data as $key => $value){

	echo 'opening file <br>';

	//get file content
	$content = file_get_contents($file);

	echo 'replacing - (' . $value[0] . ')<br>';

	$new_content = str_replace($value[1], $value[0], $content);
	
	//save updated file
	file_put_contents($file, $new_content);
}
