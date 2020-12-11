<?php

// changer rotLeft for required function name, and its arguments accordingly
function rotLeft($array, $times) {
    if (sizeof($array) > $times) {
        $lenght = $times;
    }
    else{
        $length = $times % sizeof($array);
    }
    $resultingArray = array_merge(array_slice($array,$lenght,sizeof($array)),array_slice($array,0,$lenght));
     
    return implode(" ",$resultingArray);
}

function processInput($fileInputs){
    // code copied from exercise
    fscanf($fileInputs, "%[^\n]", $nd_temp);
    $nd = explode(' ', $nd_temp);
    
    $n = intval($nd[0]);
    
    $d = intval($nd[1]);
    
    fscanf($fileInputs, "%[^\n]", $a_temp);
    
    $a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));
    // up to here

    // put one element in processedInputs array for each of the arguments of the exercise function
    $processedInputs[0] = $a;    
    $processedInputs[1] = $d;    
    return $processedInputs;
}

function callFunctionOnInputFile($fileInputs){
    
    $processedInputs = processInput($fileInputs);
    //adjust arguments according to process input output and exercise function needs
    // modify so it returns a string
    return rotLeft($processedInputs[0], $processedInputs[1]);
}

function returnExpectedOutput($fileOutputs){
    fscanf($fileOutputs, "%[^\n]", $a_temp);
    
    $output= array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

    return implode(" ",$output);
}

function returnInput($fileInputs)
{
    $processedInputs = processInput($fileInputs);

    //adjunst according to process i
    $inputAsString = "InputArg1 :".implode(",",$processedInputs[0])."<br>";
    $inputAsString .= "InputArg2 :".$processedInputs[1]."<br>";
    
    return $inputAsString;
}




?>