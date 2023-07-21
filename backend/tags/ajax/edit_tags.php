<?php
	header('Content-Type: application/json');
    include('../../conn.php');
    date_default_timezone_set('Asia/Bangkok');

    $strSQL = "UPDATE tags SET ";
    $strSQL .= "tagsname='".$_POST["tagsname"]."',status='".$_POST["status"]."' ";
    $strSQL .= "WHERE tagscode= '".$_POST["tagscode"]."' ";

    
	$query = mysqli_query($conn,$strSQL);
    
    // echo $strSQL;


        if($query) {
            echo json_encode(array('status' => '1','message'=> 'แก้ไข Tags '.$_POST["tagsname"].' สำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
        }
    
        mysqli_close($conn);
?>