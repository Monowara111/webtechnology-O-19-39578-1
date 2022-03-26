<?php 

require_once('model/model.php');

function fetchAllfood(){
	return showAllfood();

}
function fetchfood($code){
	return showfood($code);

}
