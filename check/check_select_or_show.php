<?php

    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Project.php');

    //create object of 'Project' class from Project.php file
    $pro = new Project();

    //pass this skill through checkSkill() method to Project.php file
    $pro->getDataWithoutRefresh();

?>