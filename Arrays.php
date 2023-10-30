<h1>ARRAYS</h1>

<form action="array.php" method="GET">
<input type="text" name="xname">
<input type="submit">
</form>



<?php
//$family = array("Father", "Mother", "Brother");
//$family [1] = "Love";
//$family [3] = "Sister";
//echo $family[1];
//echo $family [3];
//echo count($family);
//echo "<br>";
//echo $family[1];


$name = $_GET["name"];
$score = array(
    "Nour" => array(
    "Score" => "90",
    "Grade" => "A"
    ),
    "Majed" => array(
    "Score" => "40",
    "Grade" => "C"
    ),
    "Anas" => array(
    "Score" => "20",
    "Grade" => "F"
    ),
    );
echo "Score:" . $score[$name]["Score"];
echo "<br>";
echo "Grade: " . $score[$name]["Grade"];
?>



