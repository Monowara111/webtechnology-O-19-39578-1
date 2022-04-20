<?php 

require_once 'db_connect.php';


function showAllCustomers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `orderlist` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}






function addCus($data){
	$conn = db_conn();
    $selectQuery = "INSERT into deliveryman (name, email, username, phone, password, address, gender, date)
VALUES (:name,:email, :username, :phone, :password, :address, :gender, :date)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
            ':email' => $data['email'],  
        	':username' => $data['username'],
        	':phone' => $data['phone'],
        	':password' => $data['password'],
            ':address' => $data['address'],
            ':gender' => $data['gender'],
            ':date' => $data['date'],
            
            

        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function deleteCustomer($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM orderlist WHERE `order_id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function acceptOrder($id)
{
    $conn = db_conn();
    $selectQuery = "update  orderlist SET is_accepted=1 where order_id=?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
?>
