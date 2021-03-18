<?php 


for($i=1 ; $i<=10; $i++){

 if($i==4 || $i==9){
     continue;
 }
 else {
     echo $i. "\n"; 
 }

 
}

 echo "<br />";



for($j=1 ; $j<=10 ; $j++){
$multi=6*$j;

    echo $multi. "\n"; 
}

echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";



for ( $x=1 ; $x<= 100 ; $x++){

    if ($x%5==0 && $x%3==0)
    {
        echo ("fizzbuzz"."<br/>");
    }
    else if ($x%5==0)
    {
        echo ("buzz"."<br/>");
    }
    else if ($x%3==0)
    {
        echo("fizz "."<br/>");
    }
    else
    {
        echo $x ."<br/>";
    }
}








?>
