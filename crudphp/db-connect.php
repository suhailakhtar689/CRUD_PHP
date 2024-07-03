<?php

try{
    $conn = mysqli_connect("localhost","root","","crudphp");
}
catch(Exception $e){
    echo ($e);
    die();
}

?>