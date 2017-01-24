<?php 
$string=file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico= explode("\n",$string);
str_word_count($string);
echo "ce dictionnaire contient ".str_word_count($string)." mot"; 


?>