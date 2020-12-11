<?php

// changer repeatedString for required function name, and its arguments accordingly
function repeatedString($subString, $amount) {
    $asInString = substr_count($subString,"a");
    $subStringLen = strlen($subString);
    $count = 0;
    
    $timesSubStringInAmount = floor($amount / $subStringLen);
    
    if ($timesSubStringInAmount != 0) {
        $remainingCharacters =  $amount % $subStringLen;
        $asInRemainignString = substr_count($subString,"a",0,$remainingCharacters);
        return $asInString * $timesSubStringInAmount + $asInRemainignString;
   }
   else {
       return substr_count($subString,"a",0,$subStringLen-$amount+1);
   }

}



function processInput($fileInputs){
    // code copied from exercise
    fscanf($fileInputs, "%s\n", $input);
    fscanf($fileInputs, "%d\n", $ar_temp);
    $ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
    // up to here

    // put one element in processedInputs array for each of the arguments of the exercise function
    $processedInputs[0] = $input;    
    $processedInputs[1] = $ar_temp;    
    return $processedInputs;
}

function callFunctionOnInputFile($fileInputs){
    
    $processedInputs = processInput($fileInputs);
    //adjust arguments according to process input output and exercise function needs
    // modify so it returns a string
    return repeatedString($processedInputs[0], $processedInputs[1]);
}

function returnExpectedOutput($fileOutputs){
    fscanf($fileOutputs, "%d\n", $output);
    return $output;
}

function returnInput($fileInputs)
{
    $processedInputs = processInput($fileInputs);

    //adjunst according to process i
    $inputAsString = "InputArg1 :".$processedInputs[0]."<br>";
    $inputAsString .= "InputArg2 :".$processedInputs[1]."<br>";
    
    return $inputAsString;
}




?>