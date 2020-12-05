<?php

if (isset($_GET['category']) && isset($_GET["challengeName"])) {

    $inputs = scandir($_GET['category']."/".$_GET["challengeName"]);
    var_dump($inputs);
    // include ($_GET['category']."/".$_GET["challengeName"].".php");
}


?>