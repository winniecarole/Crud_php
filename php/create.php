<?php
 if(isset($_POST['create'])){ //püft ob create existiert
     function validteuser($data){
         $data=trim($data);
         $data=stripcslashes($data); //die zu entschlüsselnde Zeichenkette
         $data=htmlspecialchars($data); //die umzuwandelnde Zeichenkette
         return $data;
     }
     $name=validteuser($_POST['name']);
     $vorName=validteuser($_POST['vorname']);
     $email=validteuser($_POST['email']);
     $password=validteuser($_POST['password']);
     $user_data = 'name='.$name. '&vorname='.$vorName.'password='.$password. '&email='.$email;



     if (empty($name)) {
         header("Location: ../index.php?error=Name is required&$user_data");
     }else if (empty($vorName)) {
         header("Location: ../index.php?error=Vorname is required&$user_data");
     }else if (empty($password)) {
         header("Location: ../index.php?error=password is required&$user_data");
     }else if (empty($email)) {
         header("Location: ../index.php?error=Email is required&$user_data");
     }else{
         echo "okay";
     }




 }
?>