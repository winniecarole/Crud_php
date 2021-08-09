<?php

if(isset($_GET['id'])){
    include "../db_conn.php";
    function validateuser($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    echo $_GET['id'];
}else{
    header("Location: ../read.php");
}
?>
