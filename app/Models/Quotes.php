<?php
    class Quotes{
        // Connection
        private $conn;
        // Table
        private $db_table = "quote";
        // Columns
        public $id;
        public $words;
        public $type;
        public $author;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getQuotes(){
            // $sqlQuery = "SELECT id, words, type, author FROM " . $this->db_table . "";
            $sqlQuery = "SELECT * FROM  . $this->db_table . ";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createQuotes(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        words = :words, 
                        type = :type, 
                        author = :author";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->words=htmlspecialchars(strip_tags($this->words));
            $this->type=htmlspecialchars(strip_tags($this->type));
            $this->author=htmlspecialchars(strip_tags($this->author));
            
        
            // bind data
            $stmt->bindParam(":words", $this->words);
            $stmt->bindParam(":type", $this->type);
            $stmt->bindParam(":author", $this->author);
            
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // READ single
        public function getSingleQuotes(){
            $sqlQuery = "SELECT
                        *
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->words = $dataRow['words'];
            $this->type = $dataRow['type'];
            $this->author = $dataRow['author'];
            
        }        
        // UPDATE
        public function updateQuotes(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        words = :words, 
                        type = :type, 
                        author = :author
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->words=htmlspecialchars(strip_tags($this->words));
            $this->type=htmlspecialchars(strip_tags($this->type));
            $this->author=htmlspecialchars(strip_tags($this->author));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":words", $this->words);
            $stmt->bindParam(":type", $this->type);
            $stmt->bindParam(":author", $this->author);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteQuotes(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
?>