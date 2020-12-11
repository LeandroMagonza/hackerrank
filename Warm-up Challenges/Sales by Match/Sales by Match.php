<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $sockColors)
{
    $pairs = 0;
    var_dump($sockColors);
    foreach ($sockColors as $color) {
        if (isset($socksGrouped[$color])) {
            unset($socksGrouped[$color]);
            $pairs++;
        }
        else {
            $socksGrouped[$color] = true;
        }
    }
    return $pairs;
}

function processInput($fileInputs)
{
    fscanf($fileInputs, "%d\n", $input);
    fscanf($fileInputs, "%[^\n]", $ar_temp);
    $ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

    $processedInputs[0] = $input;
    $processedInputs[1] = $ar;
    return $processedInputs;
}

function callFunctionOnInputFile($fileInputs)
{

    $processedInputs = processInput($fileInputs);
    return sockMerchant($processedInputs[0], $processedInputs[1]);
}

function returnExpectedOutput($fileOutputs)
{
    fscanf($fileOutputs, "%d\n", $output);
    return $output;
}

function returnInput($fileInputs)
{
    $processedInputs = processInput($fileInputs);

    $inputAsString = "Socks :".$processedInputs[0]."<br>";
    $inputAsString .= "Colors :".implode(",",$processedInputs[1]);
    
    return $inputAsString;
}
