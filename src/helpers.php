<?php

function convertCharacterToCodeArray($alphabet){
	return explode('\\', substr(json_encode($alphabet), 1,-1) );
}

function getAnswer($convertedText,$answer){
	return strpos($convertedText, ' ')==TRUE ? $answer . ' ' : $answer;
}

function checkNumbers($convertedTextArray){
	$previousConvertedText=$convertedTextArray[$key-1];
	return isset($previousConvertedText) &&
	$previousConvertedText=='u1040' ||
	$previousConvertedText=='u1041' ||
	$previousConvertedText=='u1042' ||
	$previousConvertedText=='u1043' ||
	$previousConvertedText=='u1044' ||
	$previousConvertedText=='u1045' ||
	$previousConvertedText=='u1046' ||
	$previousConvertedText=='u1047' ||
	$previousConvertedText=='u1048' ||
	$previousConvertedText=='u1049';
}