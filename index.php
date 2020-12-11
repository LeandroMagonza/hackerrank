<?php

if (isset($_GET['category']) && isset($_GET["challengeName"])) {

    $inputs = scandir($_GET['category'] . "/" . $_GET["challengeName"] . "/" . "input");
    // var_dump($inputs);
?>
    <table>
        <thead>
            <th>Input</th>
            <th>Expected Output</th>
            <th>Resulting Output</th>
        </thead>
        <tbody>
            <?php
            include($_GET['category'] . "/" . $_GET["challengeName"] . "/" . $_GET["challengeName"] . ".php");

            foreach ($inputs as $key => $inputFileName) {
                if (strlen($inputFileName) > 3) {
                    
                    $fileInputs = fopen($_GET['category'] . "/" . $_GET["challengeName"] . "/input" . "/" . $inputFileName, "r");
                    $fileInputs2 = fopen($_GET['category'] . "/" . $_GET["challengeName"] . "/input" . "/" . $inputFileName, "r");
                    $fileOutputs = fopen($_GET['category'] . "/" . $_GET["challengeName"] . "/output" . "/" . str_replace("input","output",$inputFileName), "r");
                    $input = returnInput($fileInputs);
                    $expectedOutput = returnExpectedOutput($fileOutputs);
                    $calculatedOutput = callFunctionOnInputFile($fileInputs2);
                    if ($expectedOutput == $calculatedOutput) {
                        $rowColor = "lightgreen";
                    }
                    else
                    {
                        $rowColor = "darkorange";
                    }
            ?>
                    <tr style="background-color: <?php echo $rowColor ?>;">
                        <td><?php echo $input  ?></td>
                        <td><?php echo $expectedOutput  ?></td>
                        <td><?php echo $calculatedOutput  ?></td>
                    </tr>
            <?php
                    fclose($fileInputs);
                    fclose($fileInputs2);
                    fclose($fileOutputs);
                }
            }
            ?>
        </tbody>
    </table>
<?php


}


?>