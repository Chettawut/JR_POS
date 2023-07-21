<?php
	header('Content-Type: application/json');
	include('../../conn.php');
    
    date_default_timezone_set("Asia/Bangkok");

    $strSQL = "UPDATE items SET ";
    $strSQL .= " stname1='".$_POST["stname1"]."',unit='".$_POST["unit"]."',typecode='".$_POST["typecode"]."' ";
    $strSQL .= ",price='".$_POST["price"]."',status='".$_POST["status"]."',e_date='".date("Y-m-d")."',e_time='".date("H:i:s")."',e_user='".$_POST["id"]."' ";
    $strSQL .= "WHERE stcode= '".$_POST["stcode"]."' ";

    
	$query = mysqli_query($conn,$strSQL);
    
    // echo $strSQL;


        if($query) {
            echo json_encode(array('status' => '1','message'=> 'แก้ไขรหัสสินค้า '.$_POST["stcode"].' สำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
        }
    
        mysqli_close($conn);
?>