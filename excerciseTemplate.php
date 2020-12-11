<?php

// changer exerciseTemplate for required function name, and its arguments accordingly
function exerciseTemplate($n, $ar) {


}

function processInput($fileInputs){
    // code copied from exercise
    fscanf($fileInputs, "%d\n", $input);
    fscanf($fileInputs, "%[^\n]", $ar_temp);
    $ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
    // up to here

    // put one element in processedInputs array for each of the arguments of the exercise function
    $processedInputs[0] = $input;    
    $processedInputs[1] = $ar;    
    return $processedInputs;
}

function callFunctionOnInputFile($fileInputs){
    
    $processedInputs = processInput($fileInputs);
    //adjust arguments according to process input output and exercise function needs
    // modify so it returns a string
    return exerciseTemplate($processedInputs[0], $processedInputs[1]);
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