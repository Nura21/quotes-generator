<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../../../config/database.php'; //Call database
    include_once '../../../app/Http/Controllers/QuotesController.php'; //Call Controller
    
    
    
    $database = new Database(); //Deklar Object
    $db = $database->getConnection(); //Panggil fungsi
    $items = new QuotesController($db);
    $stmt = $items->index();
    $itemCount = $stmt->rowCount();

    echo json_encode($itemCount);
    if($itemCount > 0){
        
        $quotesArr = array();
        $quotesArr["body"] = array();
        $quotesArr["itemCount"] = $itemCount;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "words" => $words,
                "type" => $type,
                "author" => $author
            );
            array_push($quotesArr["body"], $e);
        }
        echo json_encode($quotesArr);
    }
    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
?>