<?php
$result=50;
$gen="jamal";
$female="female";
$male="male";

if($gen=="tina" || $gen=="shila" || $gen=="rabeya" || $gen=="rokeya"){

    $gen=$female;    
}

else{
   $gen=$male;
}


if($result>=40 && $result <100 && $gen==$female){
    echo"Congratulation .$female";
}

else if($result<40  && $gen==$female){
    echo"Better Luck Next time .$female";
}

else if($result>=40 && $result <100 && $gen==$male){
    echo "Congratulation .$male";
}

else if($result<40 && $gen==$male){
    echo"Better Luck Next time .$male";
}


?>