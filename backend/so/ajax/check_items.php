<?php
	header('Content-Type: application/json');
	include('../../conn.php');

	// $_POST['idcode']='100001';
	$strSQL = "SELECT * FROM `items`  where stcode = '".$_POST['stcode']."' and status = 'Y' ";
	$query = mysqli_query($conn,$strSQL);
	
	$json_result=array(
		"stcode" => array(),
		"stname1" => array(),
		"unit" => array(),
		"price" => array()
		
        );
        while($row = $query->fetch_assoc()) {
			array_push($json_result['stcode'],$row["stcode"]);
			array_push($json_result['stname1'],$row["stname1"]);
			array_push($json_result['unit'],$row["unit"]);
			array_push($json_result['price'],$row["price"]);
        }
        echo json_encode($json_result);



?>