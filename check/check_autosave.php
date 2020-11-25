<?php

    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Project.php');

    //create object of 'Project' class from Project.php file
    $pro = new Project();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //hold content
        $content = $_POST['content'];
        //hold contentid
        $contentid = $_POST['contentid'];
        //pass those through by checkSkill() method to Project.php file
        $autosave = $pro->contentAutoSave($content, $contentid);
    }

?>