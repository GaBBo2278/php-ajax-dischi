<?php
    //includo il database
    require __DIR__ . '/../GENERALI/database.php';
    //definisco che le informazioni passate sono di tipo json
    header('Content-Type: application/json');
    //trasformo gli array del database in json
    echo json_encode($database);
?>