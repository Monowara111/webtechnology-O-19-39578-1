<?php 

require_once 'db_connect.php';


/*function showAllCus(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `deliveryman` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}*/

/*function showCus($code){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `deliveryman` where username = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$code]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}*/

/*function searchfood($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `food` WHERE name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}*/


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
?>
/*function searchUsername($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `cusreg` WHERE username = '$uname'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}?>

/*function updatefood($code, $data){
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
}*/