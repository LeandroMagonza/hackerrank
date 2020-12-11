<?php

// changer hourglassSum for required function name, and its arguments accordingly
function hourglassSum($arr)
{
    $hourgrassSums = [];

    for ($row = 0; $row < 4; $row++) {
        for ($column = 0; $column < 4; $column++) {
            $hourgrassSums[] = $arr[$row][$column] +
                $arr[$row][$column + 1] +
                $arr[$row][$column + 2] +
                $arr[$row + 1][$column + 1] +
                $arr[$row + 2][$column] +
                $arr[$row + 2][$column + 1] +
                $arr[$row + 2][$column + 2];
        }
    }

    return max($hourgrassSums);
}

function processInput($fileInputs)
{
    // code copied from exercise
    $arr = array();

    for ($i = 0; $i < 6; $i++) {
        fscanf($fileInputs, "%[^\n]", $arr_temp);
        $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
    }
    // up to here

    // put one element in processedInputs array for each of the arguments of the exercise function
    $processedInputs = $arr;
    return $processedInputs;
}

function callFunctionOnInputFile($fileInputs)
{

    $processedInputs = processInput($fileInputs);
    //adjust arguments according to process input output and exercise function needs
    // modify so it returns a string
    return hourglassSum($processedInputs);
}

function returnExpectedOutput($fileOutputs)
{
    fscanf($fileOutputs, "%d\n", $output);
    return $output;
}

function returnInput($fileInputs)
{
    $processedInputs = processInput($fileInputs);

    //adjunst according to process i
    $inputAsString = "";
    foreach ($processedInputs as $value) {
        $inputAsString .= implode(",", $value) . "<br>";
    }

    return $inputAsString;
}
