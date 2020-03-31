<?php

if (isset($_POST["save"])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";


}else if (isset($_GET["Submit"])) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";


}


?>