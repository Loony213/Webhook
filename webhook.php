<?php
// webhook.php

// Verificar si es una solicitud POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el contenido de la solicitud JSON
    $data = json_decode(file_get_contents('php://input'), true);

    // Responder con un mensaje
    echo json_encode(['status' => 'success', 'message' => 'Webhook recibido con éxito']);
} else {
    // Si la solicitud no es POST, enviar 404
    header("HTTP/1.1 404 Not Found");
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
}
?>
