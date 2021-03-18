  
  
  
  <form action="exercice11.php" method="GET">
 <input type="text"    placeholder= " Enter Nom" name="nom" > 
 <input type="text" placeholder= " Enter  Prenom" name="prenom">
 <input type="number" name="age"placeholder=" Enter age "> 
 <input type="submit" name="submit"  value= " submit">



</form>

<?php 
function  Youcode(){
if(isset($_GET['submit'])) {
    $age=$_GET[ "age"];
      
if($age != null ) {
 
    if( $age >=  18 && $age <= 35 ) {
        echo " welcoom to youcode";

    }
    else {
 echo " You are not admissible in Youcode ";
    }


}




}
}
Youcode();






?>





