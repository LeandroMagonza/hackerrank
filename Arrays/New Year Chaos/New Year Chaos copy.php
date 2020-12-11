<?php

// changer exerciseTemplate for required function name, and its arguments accordingly
function minimumBribes($q) {

    $totalBribes = 0;

    $expectedFirst = 1;
    $expectedSecond = 2;
    $expectedThird = 3;
    
    foreach ($q as $key => $value) {
        if ($value == $expectedFirst) {
            $expectedFirst = $expectedSecond;
            $expectedSecond = $expectedThird;
            ++$expectedThird;
        } else if ($value == $expectedSecond) {
            ++$totalBribes;
            $expectedSecond = $expectedThird;
            ++$expectedThird;
        } else if ($value == $expectedThird) {
            $totalBribes += 2;
            ++$expectedThird;
        } else {
            return "Too chaotic";
        }
    }
    
    return $totalBribes;
    
}

function processInput($fileInputs){
    // code copied from exercise
    fscanf($fileInputs, "%d\n", $input);
    fscanf($fileInputs, "%d\n", $input);
    fscanf($fileInputs, "%[^\n]", $ar_temp);
    $ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
    // up to here

    // put one element in processedInputs array for each of the arguments of the exercise function
    $processedInputs[0] = $ar;    
    return $processedInputs;
}

function callFunctionOnInputFile($fileInputs){
    
    $processedInputs = processInput($fileInputs);
    //adjust arguments according to process input output and exercise function needs
    // modify so it returns a string
    return minimumBribes($processedInputs[0]);
}

function returnExpectedOutput($fileOutputs){
    fscanf($fileOutputs, "%s", $output);
    return $output;
}

function returnInput($fileInputs)
{
    $processedInputs = processInput($fileInputs);

    //adjunst according to process i
    // $inputAsString = "InputArg1 :".$processedInputs[0]."<br>";
    $inputAsString = "InputArg2 :".implode(",",$processedInputs[0])."<br>";
    
    return $inputAsString;
}




?>