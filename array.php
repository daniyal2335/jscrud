<?php
$allStudents=["ali","aqsa","ahmed","huzaifa",21,22,24,27,28];
//echo $allStudents[3] . " " .$allStudents[0];
//print_r($allStudents);
//var_dump($allStudents);
for($i=0;$i<=7;$i++){
    echo $allStudents[$i]."<br>";
}
?>
<h1>for loop</h1>
<?php 
for($i=0;$i<count($allStudents);$i++){
    echo $allStudents[$i]." ";
}

?>
<h2>for each</h2>
<?php 
foreach($allStudents as $singlestudents){
    echo $singlestudents ." ";
}

?>