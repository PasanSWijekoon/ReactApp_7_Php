<?php

$Php_object = new stdClass();
$php_array = array();
$con = new mysqli("localhost", "root", "Java@8828", "reactdb1");
$t = $con->query("SELECT `name` FROM `user`");


for ($x = 0; $x < $t->num_rows;$x++){

    $r = $t->fetch_assoc();
    $php_array[$x] = $r["name"];


}

$Php_object->names = $php_array;

$json = json_encode($Php_object);

echo($json);

?>