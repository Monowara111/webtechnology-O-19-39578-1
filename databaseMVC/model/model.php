<?php 

require_once 'db_connect.php';


function showAllfood(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `food` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showfood($code){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `food` where code = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$code]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchfood($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `food` WHERE name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addfood($data){
	$conn = db_conn();
    $selectQuery = "INSERT into food (code, name, price, display)
VALUES (:code, :name, :price, :display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':code' => $data['code'],
        	':name' => $data['name'],
        	':price' => $data['price'],
        	':display' => $data['display'],
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updatefood($code, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE food set price = ?, display=? where code = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['price'], $data['display'],  $code
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deletefood($code){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `food` WHERE `code` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$code]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}