<?php
include_once('database.php');
$user = $_POST['name'];
        $eml =  $_POST['email'];
        $pswd =  $_POST['pwd'];
        $pswde =  $_POST['pwde'];
        echo "$user $eml $pswd $pswde";
if (isset($_POST['regeistre'])) {

   if (!empty($_POST['name']) && !empty($_POST['email'])   && !empty($_POST['pwd']) && !empty($_POST['pwde'])) {
        $user = $_POST['name'];
        $eml =  $_POST['email'];
        $pswd =  $_POST['pwd'];
        $pswde =  $_POST['pwde'];
        $uq = "INSERT INTO `signup`(`username`, `email`, `motpass`)
            VALUES('$user' , '$eml','$pswd')";
      mysqli_query($link, $uq);
        header('Location: signin.php');
    }
   
    else{
        header('Location:signup.php');
    }
}

   
    

?>