<?php 

require_once '../model/model.php';

if (deleteCustomer($_GET['order_id'])) {
    header('location:../view/displayorderlist.php');
    
}

 ?>