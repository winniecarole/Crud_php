<?php
if(isset($_GET['id'])){
    include "db_conn.php";

    function validteuser($data){
        $data=trim($data);
        $data=stripcslashes($data); //die zu entschlüsselnde Zeichenkette
        $data=htmlspecialchars($data); //die umzuwandelnde Zeichenkette
        return $data;
    }
    $id=validteuser($_GET['id']);
    $sql="SELECT * FROM users WHERE id=$id";//sql abfrage
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: read.php");
    }
}else{
    header("Location: read.php");
}
?>
