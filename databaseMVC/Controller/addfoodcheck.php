<?php  
require_once '../model/model.php';


if (isset($_POST['addfoodcheck'])) {
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

  if (addfood($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>