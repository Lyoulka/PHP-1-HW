<?php
//first way
$string = 'Один пробел , два пробела  , три пробела   .';
$newString = changeSpace($string);
echo $newString.'<br>';

function changeSpace($space){
	$spaceArray = array(" " => "_");
	return strtr($space,$spaceArray);
}

//second way
$string1 = 'Один пробел , два пробела  , три пробела   .';
$newString1 = changeSpace1($string1);
echo $newString1;
function changeSpace1($space1){
	$spaceItem = " ";
	$newItem = "_";
	return str_replace($spaceItem, $newItem, $space1);
}