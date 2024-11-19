<?php

    //print_r($_FILES);

    $file_name =  $_FILES['myfile']['name'];
    // $ext = explode('.', $file_name);
    // print_r($ext);
    $src = $_FILES['myfile']['tmp_name'];
    $des = "upload/". $file_name;

    if(move_uploaded_file($src, $des)){
        echo "success";
    }else{
        echo "error";
    }
?>