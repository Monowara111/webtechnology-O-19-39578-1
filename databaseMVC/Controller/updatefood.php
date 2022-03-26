<?php  
require_once '../model/model.php';


if (isset($_POST['updatefood'])) {
	$data['code'] = $_POST['code'];
	$data['name'] = $_POST['name'];
	$data['price'] = $_POST['price'];
	if(empty($_POST['display']))
  {
    $data['display']="NO";
  }
  else
  {
    $data['display']=$_POST['display'];
  }

	

  if (updatefood($_POST['code'], $data)) {
  	echo 'Successfully updated!!';
  	
  	header('Location: ../showfood.php?code=' . $_POST["code"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>