<?php
    require __DIR__ . '/../data/database.phpdatabase.php';
    
    header('Content-Type: application/json');
    echo json_encode($db);
?>