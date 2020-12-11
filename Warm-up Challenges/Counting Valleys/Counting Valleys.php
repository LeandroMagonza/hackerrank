<?php

// changer countingValleys for required function name, and its arguments accordingly
function countingValleys($steps, $path) {
    $ar = preg_split('//', $path, -1, PREG_SPLIT_NO_EMPTY);
    $currentLevel = 0;
    $valleys = 0;
    foreach ($ar as $currentStep){
        if ($currentStep == "D") {
            if ($currentLevel == 0) {
                $valleys++;
            }
            $currentLevel--;
        }
        else{
            $currentLevel++;
        }
    }
    return $valleys;
}

function processInput($fileInputs){
    // code copied from exercise
    fscanf($fileInputs, "%d\n", $input);
    fscanf($fileInputs, "%[^\n]", $ar_temp);
    $ar = preg_split('//', $ar_temp, -1, PREG_SPLIT_NO_EMPTY);
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
    return countingValleys($processedInputs[0], $processedInputs[1]);
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