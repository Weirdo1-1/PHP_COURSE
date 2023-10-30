<?php

$title = "Sami Jabarti";
$num = 40;
$float = 40.5;
$bool = true;
$bool2 = false;
$nothing = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " - Home page"?></title>
</head>
<body>
<?php echo "<h1>Welcome to $title</h1>"; 
echo $num;
echo "<br>";
echo $float;
?>
</body>
</html>