<?php

try {
    $con = new PDO("mysql:host=localhost;dbname=stagiaires","root","");
    $con->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo $e->getMessage();
}


?>
