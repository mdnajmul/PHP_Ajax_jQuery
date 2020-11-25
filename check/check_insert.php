<?php

    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Project.php');

    //create object of 'Project' class from Project.php file
    $pro = new Project();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //hold skill
        $conttxt = $_POST['cont'];
        //pass this skill through checkSkill() method to Project.php file
        $checkref = $pro->autoInsert($conttxt);
    }

?>