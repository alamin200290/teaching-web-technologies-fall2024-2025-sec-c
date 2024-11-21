<?php

    $fileData = file_get_contents('abc.xml');
    $students = new SimpleXMLElement($fileData);
    echo $students->student[0]->email;
?>