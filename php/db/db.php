<?php

    $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    //var_dump($conn);
    //$sql = "select * from users";
    //$result = mysqli_query($conn, $sql);
    //var_dump($result);
    //$row = mysqli_fetch_assoc($result);
    //print_r($row);
    // for($i=0; $i<mysqli_num_rows($result); $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     echo "<br>";
    //     print_r($row);
    // }

    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<br>";
    //     print_r($row);
    // }

    $sql = "insert into users VALUES('', 'ZZZ', 'zzz', 'xxx@aiub.edu')";
    if(mysqli_query($conn, $sql)){
        echo "Success";
    }else{
        echo "Error";
    }
?>