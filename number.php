<!DOCTYPE html>
<html>
<body>

<?php
// Check if the type of a variable is integer   
$x = 2024;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 20.24;
var_dump(is_int($x));
?>  

</body>
</html>