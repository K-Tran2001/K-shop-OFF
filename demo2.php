<?php

include 'config2.php';


    $type_id=11000000;
    $type="test";
    $res=0;
    $sql="INSERT INTO `type` (`type_id`, `type`) VALUES ($type_id, '$type')";
    $result=mysqli_query($conn,$sql);

if($result==1)
    echo 1;
else echo 0;
 
 //$res=$cust_id['CUST_ID'];

?>