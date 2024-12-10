<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        //print_r($_GET);
        //echo "Test";
        //var_dump($_GET);

        // $abc = 10;

        // function sum(){
        //     //$GLOBALS['abc'];
        //     global $abc;
        // }

        $username = trim($_POST['username']);
        $password = trim($_REQUEST['password']);
        //echo "your username is: ".$username;
        //echo "your username is: {$username}";

        if($username == null || empty($password)){
            echo "Null username/password!";

        }else if ($username == $password) {
            //echo "valid user!";
            $_SESSION['status'] = true;
            setcookie('status', 'true', time()+3000, '/');
            header('location: home.php');
        }else{
            echo "invalid user!";
        }
    }else{
        header('location: login.html');
    }

?>