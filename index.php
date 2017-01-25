<?php 
$string=file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico= explode("\n",$string);

$nombremot=str_word_count($string);
echo "ce dictionnaire contient ".$nombremot." mot"; 
function nbrecarac($dico){
	$i=0;
	foreach ($dico as $key => $value) {

		if (strlen($value)===15) {
			$i++;
		};
	}
	echo "il y'as ".strval($i)." font exactement 15 caractères";
}
nbrecarac($dico);
?>