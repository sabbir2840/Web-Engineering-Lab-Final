<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pattern</title>
</head>
<body>
<?php 
    $size = 5; 
    for($i = 0; $i < $size; $i++) {  
        for($j = 0; $j <= $i; $j++) { 
            echo "*"; 
        } 
        echo "<br>"; 
    } 
?>
</body>
</html>