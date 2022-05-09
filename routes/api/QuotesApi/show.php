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
    $item->id = isset($_GET['id']) ? $_GET['id'] : die();
  
    $item->show();
    if($item->name != null){
        // create array
        $emp_arr = array(
            "id" =>  $item->id,
            "words" => $item->words,
            "type" => $item->type,
            "author" => $item->author
        );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Quotes not found.");
    }
?>