<?php
    class GenerateQuotes{
        // Connection
        private $conn;
        
        // Table
        private $db_table = "generate_quotes";
        
        // Columns
        public $id;
        public $quotes_id;
        
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getGenerateQuotes(){
            $sqlQuery = "SELECT * FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createGenerateQuotes(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        quotes_id = :quotes_id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->quotes_id=htmlspecialchars(strip_tags($this->quotes_id));
            
        
            // bind data
            $stmt->bindParam(":quotes_id", $this->quotes_id);
            
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // READ single
        public function getSingleGenerateQuotes(){
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
            
            $this->quotes_id = $dataRow['quotes_id'];
        }        
        // UPDATE
        public function updateGenerateQuotes(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        quotes_id = :quotes_id
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->quotes_id=htmlspecialchars(strip_tags($this->quotes_id));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":quotes_id", $this->quotes_id);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteGenerateQuotes(){
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