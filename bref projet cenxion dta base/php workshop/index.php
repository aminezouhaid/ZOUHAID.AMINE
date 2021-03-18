<?php
 echo "Hello Youcode <br>"; 

    $monNom= "Zouhaid";
    $monPrenom="Amine";
    $monAge=   23 ;
    
 echo"monNom :" .$monNom;
  echo"<br>";
 echo"monPrenom : " .$monPrenom ;
 echo "<br/>";
echo "monAge : ". $monAge; 

echo "<br/>";
$admin = false;
echo (int)$admin;

echo "<br/>";
$name1 = 'anas';

$name2 = null;

echo 'checking $name1 : ';
var_dump(isset($name1));

echo '<br>';

echo 'checking $name2: ';
var_dump(isset($name2));

echo '<br>';

echo 'checking undeclared variable $name3: ';
var_dump(isset($name3));


foreach ($variable as $key => $value) {
    # code...
}

foreach ($variable as $key => $value) :

endforeach;


$_GET = array(
    
    'number1'=>1,
     'number2'=>3);
var_dump(isset($_GET));

echo '<pre>';

print_r($_GET);

echo '</pre>';



 $name1 = '';


$name2 = null;

echo "checking $name1 : ";
var_dump(isset($name1));
//isset retoune true or false ( une variable existe mais differente de null  => null c'est un type de donnée en PHP)

echo '<br>';

echo 'checking $name2: ';
var_dump(isset($name2));

echo '<br>';

echo 'checking undeclared variable $name3: ';
var_dump(isset($name3));


$array = array(1,'tijani',4,5);



echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br />";

echo "la position 0 contient la valeur suivante : ".$array[0]."<br />";
echo "la position 1 contient la valeur suivante : ".$array[1]."<br />";
echo "la position 2 contient la valeur suivante : ".$array[2]."<br />";
echo "la position 3 contient la valeur suivante : ".$array[3]."<br />";

echo "la taille du tableau est : ".count($array)."<br />";;

for($i =0;$i<count($array);$i++)
{
    
    echo "la position $i contient la valeur suivante : ".$array[$i]."<br />";
}



$array_assoc = array(


     'name' => 'amine',
     'age' => 23,
     'city' => "youssoufia",


);

echo "<pre>";
print_r($array_assoc);
echo "</pre>";


foreach($array_assoc as $key => $valeur)
{

    echo "le key  $key contient la valeur suivante : ".$valeur."<br />";

}

?>
<!-- ecercice10 -->
<?php




?>



