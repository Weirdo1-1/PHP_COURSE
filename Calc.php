<?php
//Calculator
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$op = $_GET["op"];

if(empty($number1)){
    echo "Number1 field is empty";
    
} else if(empty($number2)){
    echo "Number2 field is empty";
    
} else if(empty($op)){
    echo "op field is empty";
    
    
} else if (!empty($number1) && !empty($number2) && !empty($op)){

if($op === "+"){
    $RESULT = $_GET["number1"] +  $_GET["number2"];
} else if($op === "-"){
    $RESULT = $_GET["number1"] -  $_GET["number2"];
} else if($op === "/"){
    $RESULT = $_GET["number1"] /  $_GET["number2"];
} else if($op === "*"){
    $RESULT = $_GET["number1"] *  $_GET["number2"];
} 

}








?>



<head>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label>Enter Number1: </label>
                <input type="number" id="num1" name="number1" class="form-control">
            </div>

            <div>
                <label>Enter Number2: </label>
                <input type="number" id="num2" name="number2" class="form-control">
            </div>

<br>
<div>
<label>Operation:</label>
<input type="text" name="op" class="form-control">
</div>
<br>

<div class="alert alert-success">

<?php

echo "The result is: " . $RESULT;

?>

</div>


            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>
