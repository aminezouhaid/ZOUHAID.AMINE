<?php
  include_once('database.php');



if (isset($_POST['btn'])) {
  $USERN=$_POST['user'];
  $PASSW=$_POST['pswdee'];
  $query = "SELECT username,motpass FROM signup  WHERE username='$USERN' && motpass='$PASSW'";
  $results = mysqli_query($link, $query);
  if (!empty($_POST['user']) && !empty($_POST['pswdee'])) {
  
    if( mysqli_num_rows($results) > 0  ) {
      header('location: index.php');
    }
    else{

     header('location: signin.php');
     
    }

  
  }




}
?>
