<?php
include "db_conn.php";
$sql="SELECT * FROM users ORDER BY id DESC "; //sql abfrage
$result = mysqli_query($conn, $sql);//envois une requete a la base de donnee
?>
