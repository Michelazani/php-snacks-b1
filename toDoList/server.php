<?php
    $stringList = file_get_contents('./json/list.json');
    header('Content-Type:application/jscon');
    echo $stringList
?>