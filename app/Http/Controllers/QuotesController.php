<?php 

include_once '../../Models/Quotes.php';

class QuotesController extends Quotes {
    public function index(){
        try {
            $this->getQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function show(){ //perlu ID
        try {
            $this->getSingleQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function create(){
        try {
            $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function store(){
        try {
            $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function edit(){ //perlu ID
        try {
            $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function update(){ //perlu ID
        try {
            $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }

    public function delete(){ //perlu ID
        try {
            $this->createQuotes();
        } catch (Exception $e) {
            echo 'Exception : ',  $e->getMessage(), "\n";
        }
    }
}


?>