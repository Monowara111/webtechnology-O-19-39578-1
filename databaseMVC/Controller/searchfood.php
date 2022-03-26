<?php

require_once '../model/model.php';

if (isset($_POST['searchfood'])) {
	
		echo $_POST['name'];

    try {
    	
    	$allSearchedfoods = searchfood($_POST['name']);
    	require_once '../showSearchedfood.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

