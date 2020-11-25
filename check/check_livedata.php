<?php

    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Project.php');

    //create object of 'Project' class from Project.php file
    $pro = new Project();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //hold search keyword
        $search = $_POST['search_data'];
        //pass this  through liveSearch() method to Project.php file
        $live_search = $pro->liveSearch($search);
    }

?>