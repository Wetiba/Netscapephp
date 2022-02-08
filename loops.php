<?php
//while loop
$num=10;   //initial

while ($num<=20){
    echo "Nambari ni: $num <br>";
    $num+=3;
}
echo "<br>";

//do... while
$num1=8;
do{
echo "The number is : $num1 <br>";
$num1++;
}while($num1<=12);
echo "<br>";

//for init counter, test counter, increment/decrement counter

for ($num3=20;$num3<=55;$num3+=6){
    echo "Nambari ni : $num3 <br>";
}
echo "<br>";
//for each loop...
$netscapeclass=array("Priscila","dennis","peninah","clinton" ,35, 565.77, true,false);

var_dump($netscapeclass);
echo "<br>";

foreach ($netscapeclass as $darasa){
    echo "$darasa <br>";


}





















