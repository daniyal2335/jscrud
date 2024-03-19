<?php
$allStudents=[
    ["name"=>"ali","email"=>"ali@gmail.com","age"=>21],
    ["name"=>"aqsa","email"=>"aqsa@gmail.com","age"=>23,"city"=>"karchi"],
    ["name"=>"daniyal","email"=>"daniyal@gmail.com","age"=>24,"city"=>"karchi","company"=>"aptech"]



];
foreach($allStudents as $std){
    foreach ($std as  $value) {
    echo $value." ";
    }
    echo "<br>";

}
?>
<h1>for loop</h1>
<?php

for($i=0;$i<count($allStudents);$i++){
    $allkeys=array_keys($allStudents[$i]);
    for($j=0;$j<count($allkeys);$j++){
        echo $allkeys[$i] ." ".$allStudents[$i][$allkeys[$j]]."<br>";
    }
    echo "<br>";
}