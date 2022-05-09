<?php 

include_once '../../Models/Quotes.php';

class QuotesController extends Quotes {
    public function __construct($db)
    {
        $this->__construct($db);
    }
    public function index(){
        try {
            return $this->getQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function show(){ //perlu ID
        try {
            return $this->getSingleQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function create(){
        try {
            return $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function store(){
        try {
            return $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function edit(){ //perlu ID
        try {
            return $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function update(){ //perlu ID
        try {
            return $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function delete(){ //perlu ID
        try {
            return $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }
}


?>