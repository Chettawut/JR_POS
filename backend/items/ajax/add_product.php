<?php
	header('Content-Type: application/json');
    include('../../conn.php');
    date_default_timezone_set('Asia/Bangkok');
    
    $StrSQL = "INSERT INTO items (`stcode`, `stname1`, `unit`, `typecode`, price, `status`,`s_date`,`s_time`, s_user) ";
    $StrSQL .= "VALUES (";
    $StrSQL .= "'".$_POST["add_stcode"]."','".$_POST["add_stname1"]."','".$_POST["add_unit"]."','".$_POST["add_typecode"]."' ";
    $StrSQL .= ",'".$_POST["add_price"]."','Y','".date("Y-m-d")."','".date("H:i:s")."','".$_POST["id"]."' ";
    $StrSQL .= ")";
    $query = mysqli_query($conn,$StrSQL);
    

    // echo $StrSQL;


        if($query) {
            $sql = "SELECT * FROM `places` where status = 'Y' ";
            $query1 = mysqli_query($conn,$sql);

                while($row = $query1->fetch_assoc()) {
                    $strSQL2 = " INSERT INTO stock (stcode,price,amtprice,amount,places,s_date,s_time) ";
                    $strSQL2 .= " VALUES ('".$_POST["add_stcode"]."','0','0','0','1','".date("Y-m-d"). "','".date("H:i:s"). "' ) ";
                    $oRs2=mysqli_query($conn,$strSQL2);
                }

            echo json_encode(array('status' => '1','message'=> 'เพิ่มรหัสสินค้า '.$_POST["add_stcode"].' สำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
        }
    
        mysqli_close($conn);
?>