<?php

function checkForThWaiThoCaseOne(array $convertedTextArray,string $convertedText,int $key){
	return (checkForSingleThaWaiTho($convertedText) &&
	isset($convertedTextArray[$key+1]) &&
	checkForNormalAndSpace($convertedTextArray[$key+1],'u1031')) ||
(checkForSingleThaWaiTho($convertedText) && 
	isset($convertedTextArray[$key+1]) && 
	checkForComplicatedThaWaiTho($convertedTextArray[$key+1]) &&
	isset($convertedTextArray[$key+2]) &&
	(checkForNormalAndSpace($convertedTextArray[$key+2],'u1031') ||
	(checkForComplicatedThaWaiTho($convertedTextArray[$key+2]) && isset($convertedTextArray[$key+3],$convertedTextArray) && checkForNormalAndSpace($convertedTextArray[$key+3],'u1031')   )
		 ) );

}

function checkForThWaiThoCaseTwo(array $convertedTextArray,string $convertedText,int $key){
	return ((checkForNormalAndSpace($convertedText,'u1031') ||
	(checkForComplicatedThaWaiTho($convertedText) &&
		isset($convertedTextArray[$key-1]) &&
		checkForSingleThaWaiTho($convertedTextArray[$key-1]) &&
		isset($convertedTextArray[$key+1]) &&
		(checkForNormalAndSpace($convertedTextArray[$key+1],'u1031') ||
		(checkForComplicatedThaWaiTho($convertedTextArray[$key+1]) && isset($convertedTextArray[$key+2]) && checkForNormalAndSpace($convertedTextArray[$key+2],'u1031') )
		)
		)
	) &&
isset($convertedTextArray[$key-1])) || (checkForNormalAndSpace($convertedText,'u103d') && isset($convertedTextArray[$key+1]) && checkForNormalAndSpace($convertedTextArray[$key+1],'u1031') ) || 
(checkForNormalAndSpace($convertedText,'u103e') && 
isset($convertedTextArray[$key-1]) && 
checkForNormalAndSpace($convertedTextArray[$key-1],'u103d')  &&
isset($convertedTextArray[$key-2])  &&
checkForSingleThaWaiTho($convertedTextArray[$key-2]) &&
isset($convertedTextArray[$key+1]) &&
checkForNormalAndSpace($convertedTextArray[$key+1],'u1031'));
}

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

function checkForNormalAndSpace($convertedText,$selectedText){
	return ($convertedText==$selectedText || $convertedText==$selectedText.' ');
}