<?php

// changer exerciseTemplate for required function name, and its arguments accordingly
function minimumBribes($q) {

    $bribes = 0;
    $calculatedQueueVal = 0;
    $currentQueueVal = 0;
    foreach ($q as $key => $link) {
        $key++;
        $calculatedQueueVal += $key; 
        $currentQueueVal += $link;
        $currentBribe = 0;
        if ($key+2<$link) {
            $tooChaotic = true;
        }
        
            
        
            // if (isset($q[$key]) and $q[$key] < $link) {
            //     $currentBribe++;
            // }
            // if (isset($q[$key+1]) and $q[$key+1] < $link) {
            //     $currentBribe++;
            // }
            // $bribes += max($link-$key,$currentBribe);
            // $bribes += $link-$key; 
        
        // else
        // if ($link>$key ) {
        //     echo  $bribes += min($currentQueueVal-$calculatedQueueVal,$link-$key);  
        //     echo " - ".$currentQueueVal." - ".$calculatedQueueVal;
        //     echo "<br>";
        // }
        // else {
        //     echo  $bribes += $currentQueueVal-$calculatedQueueVal;
        //     echo " - ".$currentQueueVal." - ".$calculatedQueueVal;
        //     echo "<br>";
        // }
        $bribes += $link-$key;

        
    }
    if (isset($tooChaotic)) {
        return "Too Chaotic\n";
    }
    else {
        return $bribes."\n";
    }
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