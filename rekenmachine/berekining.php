<?php
$Y=$_GET["Y"];
$x=$_GET["x"];

if ($_GET["bereken"]=="+")
{
    $uitkomst=$_GET["x"] + $_GET["Y"];
    echo "uitkomst is: $uitkomst";
}

if ($_GET["bereken"]=="-")
{
    $uitkomst=$_GET["x"] - $_GET["Y"];
    echo "uitkomst is: $uitkomst";
}

if ($_GET["bereken"]=="*")
{
    $uitkomst=$_GET["x"] * $_GET["Y"];
    echo "uitkomst is: $uitkomst";
}

if ($_GET["bereken"]=="/")
{
    if ($_GET["Y"]=="0") {
        echo "delen door 0 is niet mogelijk";  
    }
    else {
        $uitkomst=$_GET["x"] / $_GET["Y"]; 
        echo"uitkomst is $uitkomst";
    }
}

if ($_GET["bereken"]=="x 2")
{
    $ce=$_GET["x"];
    $uitkomst= pow($ce,2); 
    echo "uitkomst is $uitkomst";

}
if ($_GET["bereken"]=="√x")
{
    if ($_GET["x"]<"0") {
        echo "wortel van $x is niet mogelijk";  
    }
    else {
   $cd=$_GET["x"];
   $uitkomst= sqrt($cd); 
   echo "uitkomst is $uitkomst";
    }
}
if ($_GET["bereken"]=="xY")
{
    $x=$_GET["x"];
    $Y=$_GET["Y"];
    $uitkomst= pow($x,$Y); 
    echo "uitkomst is $uitkomst";
}
if ($_GET["bereken"]=="Tx")
{
    $cd=$_GET["x"];
    for($i = 1; $i <= 10; $i++ )
      {
        echo "". ($i * $cd = $_GET["x"]) .", ";
      }
 
}

?>

