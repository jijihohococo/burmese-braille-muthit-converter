<?php

function convertCharacterToCodeArray($alphabet){
	return explode('\\', substr(json_encode($alphabet), 1,-1) );
}

function getAnswer($convertedText,$answer){
	return strpos($convertedText, ' ')==TRUE ? $answer . ' ' : $answer;
}

function checkNumbers($convertedTextArray){
	return isset($$convertedTextArray[$key-1]) &&
	$$convertedTextArray[$key-1]=='u1040' ||
	$$convertedTextArray[$key-1]=='u1041' ||
	$$convertedTextArray[$key-1]=='u1042' ||
	$$convertedTextArray[$key-1]=='u1043' ||
	$$convertedTextArray[$key-1]=='u1044' ||
	$$convertedTextArray[$key-1]=='u1045' ||
	$$convertedTextArray[$key-1]=='u1046' ||
	$$convertedTextArray[$key-1]=='u1047' ||
	$$convertedTextArray[$key-1]=='u1048' ||
	$$convertedTextArray[$key-1]=='u1049';
}

// print_r(convertCharacterToCodeArray('လေ'));

// print_r(convertCharacterToCodeArray('လေ'));