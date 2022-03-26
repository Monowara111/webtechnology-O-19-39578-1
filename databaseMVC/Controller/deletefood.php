<?php 

require_once ('../model/model.php');

if (deletefood($_GET['code'])) {
    header('Location: ../showAllfoods.php');
}

 ?>