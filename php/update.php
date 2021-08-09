<?php
if(isset($_GET['id'])){
    include "../db_conn.php";

    function validteuser($data){
        $data=trim($data);
        $data=stripcslashes($data); //die zu entschlüsselnde Zeichenkette
        $data=htmlspecialchars($data); //die umzuwandelnde Zeichenkette
        return $data;
    }
    $id=validteuser($_GET['id']);
    $sql="SELECT * FROM users WHERE id=$id";
    $result=mysqli_query($conn,$sql);

}
?>
