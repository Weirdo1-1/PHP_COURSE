<form action ="form.php" method = "POST">
Name: <input type = "text" name = "F_name">
<br>
Last: <input type = "text" name = "L_name">
<br>
<input type = "submit">


</form>


<?php
echo $_REQUEST['F_name'];
echo $_REQUEST['L_name'];








?>