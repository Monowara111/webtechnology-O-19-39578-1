<?php 

require_once '../model/model.php';

if (acceptOrder($_GET['order_id'])) {
    header('location:../view/displayorderlist.php');
    
}

 ?>