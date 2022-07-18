<!doctype html>
<html>

<head>

<style>
    .tableFromPhp{
        list-style-type: square;
    }
</style>

</head>


<body>

<?php
    $var = "CodeUpSkill";

    echo "Welcome to ".$var;
    echo "<h1>Hello this is h1 sending from php</h1>";

    echo "<ul  class='tableFromPhp'>";
    for($i = 1; $i <= 10; $i++){
        echo "<li> 2 x ". $i ." = ". (2 * $i) . "</l1>";
    }
    echo "</ul>";
?>


</body>

</html>