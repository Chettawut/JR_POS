<?php
	header('Content-Type: application/json');
    include('../../conn.php');
    date_default_timezone_set('Asia/Bangkok');
	
	$strSQL = "SELECT * FROM `tags` where tagscode = '".$_POST['idcode']."'";
	$query = mysqli_query($conn,$strSQL);
	
	$json_result=array(
		"tagscode" => array(),
        "tagsname" => array(),
		"status" => array()
		
        );
        while($row = $query->fetch_assoc()) {
			array_push($json_result['tagscode'],$row["tagscode"]);
            array_push($json_result['tagsname'],$row["tagsname"]);
			array_push($json_result['status'],$row["status"]);
        }
        echo json_encode($json_result);



		mysqli_close($conn);
?>