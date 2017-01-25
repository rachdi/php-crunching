<?php 
$string=file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico= explode("\n",$string);

$nombremot=str_word_count($string);
echo "ce dictionnaire contient ".$nombremot." mot<br>"; 
function nbrecarac($dico){
	$i=0;
	foreach ($dico as $key => $value) {

		if (strlen($value)===15) {
			$i++;
		};
	}
	echo "il y'as ".strval($i)." mot font exactement 15 caractères<br>";
}
nbrecarac($dico);
function trouverw($dico){
	$j=0;
	foreach ($dico as $key => $value) {
		if (strpos($value,"w")== true) {
			$j++;

		}
	}
	echo "il yas ". strval($j)."mot qui contient la lettre  w<br>";
}
trouverw($dico);
?>