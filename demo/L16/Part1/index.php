<?php
session_start();
print_r($_SESSION);
echo "<br>";

if (!isset($_SESSION["clef"])) {
    $count = 0;
} else {
    $count = $_SESSION["clef"];
}
$count = $count + 1;
$_SESSION["clef"] = $count;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="font-size: 100px">
        <?php
        echo $count;
        echo "<br>";
        print_r($_SESSION);
        ?>
    </body>
</html>
