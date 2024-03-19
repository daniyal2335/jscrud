<!--php previous tarika -->
<?php 
$stdName="ali";
echo "<h1>" .$stdName. "</h1>";
?>
<!--new tarika-->
<?php 
$stdEmail="ali@gmail.com";

?>
<h1><?php echo $stdEmail ?></h1>

<!-- function work-->
<?php
function fun(){
echo "happy new year";

}
function fun2(){
 return "Pakistan Zindabad";
    
    }
    function breakline(){
       echo "<br>";
           
           }
           
fun();
breakline();
 echo fun2();
?>