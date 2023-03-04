<?php

$message = file_get_contents('message.txt');


header("Content-Type: application/json");
   $response = array("string" => $message);
   echo json_encode($response); 



?>