<?php

    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Project.php');

    //create object of 'Project' class from Project.php file
    $pro = new Project();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //hold username
        $username = $_POST['username'];
        //pass this username through checkUserName() method to Project.php file
        $user = $pro->checkUserName($username);
    }

?>