<?php

function convertCharacterToCodeArray($alphabet){
	return explode('\\', substr(json_encode($alphabet), 1,-1) );
}

function getAnswer($convertedText,$answer){
	return strpos($convertedText, ' ')==TRUE ? $answer . ' ' : $answer;
}

function checkNumbers($convertedText){
	return 
	$convertedText=='u1040' ||
	$convertedText=='u1041' ||
	$convertedText=='u1042' ||
	$convertedText=='u1043' ||
	$convertedText=='u1044' ||
	$convertedText=='u1045' ||
	$convertedText=='u1046' ||
	$convertedText=='u1047' ||
	$convertedText=='u1048' ||
	$convertedText=='u1049';
}

function checkForSingleThaWaiTho($convertedText){
	return
	$convertedText!=='u103b' &&
	$convertedText!=='u103c' &&
	$convertedText!=='u103d' && 
	$convertedText!=='u103e';
}

function checkForComplicatedThaWaiTho($convertedText){
	return
	$convertedText=='u103b' ||
	$convertedText=='u103c' ||
	$convertedText=='u103d' ||
	$convertedText=='u103e';
}

function checkThaWaiTho($convertedText){
	return ($convertedText=='u1031' || $convertedText=='u1031 ');
}

// print_r(convertCharacterToCodeArray('ကော်'));
// print_r(convertCharacterToCodeArray('ကွေး'));
// print_r(convertCharacterToCodeArray('ကြွေ'));
//print_r(convertCharacterToCodeArray('သင်္ကြန်'));