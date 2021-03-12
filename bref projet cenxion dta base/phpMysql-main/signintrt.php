<?php
  include_once('database.php');

  $USERN=$_POST['user'];
  $PASSW=$_POST['pswdee'];
  $query = "SELECT * FROM signup";
  $results = mysqli_query($link, $query);
  $row=mysqli_fetch_array( $results);
if (isset($_POST['btn'])) {
  if (!empty($_POST['user']) && !empty($_POST['pswdee'])) {
  }
  
  
if(  $row['username '] == $USERN && $row['motpass']== $PASSW){
  header('location:index.php');
}
else{
 header('location:signin.php');
}


}
?>
