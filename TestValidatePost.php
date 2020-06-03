<?php
    require_once('classes/global.php');
    $data = json_decode(file_get_contents('php://input'), true);
    //print_r($data);
    //echo $data["operacion"];
    foreach ($data as $key => $value) {
        echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."\r\n";
    }
?>