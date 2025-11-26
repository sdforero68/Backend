<?php
/**
 * Endpoint de prueba para verificar que el backend funciona
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

    echo json_encode([
        'success' => true,
        'backend' => 'OK',
    ], JSON_PRETTY_PRINT);
    ?>
    

