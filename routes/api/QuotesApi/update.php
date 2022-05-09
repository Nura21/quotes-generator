<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../../../config/database.php'; //Call database
    include_once '../../../app/Http/Controllers/QuotesController.php'; //Call Controller
    
    $database = new Database();
    $db = $database->getConnection();
    
    $item = new QuotesController($db);
    
    $data = json_decode(file_get_contents("php://input"));
    
    $item->id = $data->id;
    
    // quotes values
    $item->words = $data->words;
    $item->type = $data->type;
    $item->author = $data->age;
    
    if($item->update()){
        echo json_encode("Quotes data updated.");
    } else{
        echo json_encode("Data could not be updated");
    }
?>