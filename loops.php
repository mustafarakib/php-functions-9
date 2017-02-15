<head>
    <style>
        td{ width: 20%; }
    </style>
</head>

<?php

$i = 1;
    while(1){
        if($i>=9){
            break;
        }
        echo $i . " ";
        $i = $i + 2;
    }
echo "<br>";


echo "PHP - ";
$i =  1;
    while ($i<=44){
        echo "B$i";

        if($i<44){
            echo ", ";
        }
        else{
            echo ".";
        }
        $i++;
    }
echo "<br><br>";


$i = 12;
    do{
        echo "Hello $i <br>";
        $i++;
    }
    while($i<=10);


$i =1;
    for(;;){
        if($i>10) break;
        echo "$i ";
        $i++;
    }
echo "<br>";

    for( $i=1 ; $i<=10;  $i++){
        echo "Hi $i ";
    }
echo "<br><br>";


$count = 1;
echo "<table border='2'>";
    for($i=0; $i<=3; $i++){
        echo "<tr>";
            for($j=0;$j<=3;$j++){
                $myArray[$i][$j] = $count;
                    echo "<td>";
                        echo($myArray[$i][$j]);
                    echo "</td>";
                $count++;
            }
        echo "</tr>";
    }
echo "</table>";
echo "<br>";


$count = 1;
echo "<table border='2'>";
    for($i=0; $i<=3; $i++){
        echo "<tr>";
            for($j=0;$j<=$i;$j++){
                $myArray[$i][$j] = $count;
                    echo "<td>";
                        echo($myArray[$i][$j]);
                    echo "</td>";
                $count++;
            }
        echo "</tr>";
    }
echo "</table>";
echo "<br>";


$count = 1;
echo "<table border='2'>";
    for($i=0; $i<=3; $i++){
        echo "<tr>";
            for($k=3;$k>$i;$k--) echo "<td>";

            for($j=0;$j<=$i;$j++){
                $myArray[$i][$j] = $count;
                    echo "<td>";
                        echo($myArray[$i][$j]);
                    echo "</td>";
                $count++;
            }
        echo "</tr>";
    }
echo "</table>";
echo "<br>";

$ageArray = array("Abul"=>32, "Kuddus"=>30, "Moynar Ma"=>45, "Jorinar Bap"=>50);
    foreach($ageArray as  $key=>$value){
        echo "ageArray['$key'] is $value years old<br>";
    }
