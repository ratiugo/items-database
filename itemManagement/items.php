<?php

    require_once "dbConnect.php";

    class Item{

        public $servername = "us-cdbr-iron-east-04.cleardb.net";
        public $username = "bbc0c39e767f31";
        public $password = "ff6732e0";
        public $dbname = "heroku_0584f2ae52fda11";
        public $charset = "utf8mb4";

        public $conn;

        function __construct(){

            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        }

        //get item weight
        public function getItemWeight($name){
            $stmt = $this->conn->query("SELECT * FROM items WHERE name = '$name'");
            while($row = $stmt->fetch()){
                $weight = $row['weight'];
                return $weight;
            }
        }

        //get item length
        public function getItemLength($name){
            $stmt = $this->conn->query("SELECT * FROM items WHERE name = '$name'");
            while($row = $stmt->fetch()){
                $length = $row['length'];
                return $length;
            }
        }

        //get item width
        public function getItemWidth($name){
            $stmt = $this->conn->query("SELECT * FROM items WHERE name = '$name'");
            while($row = $stmt->fetch()){
                $width = $row['width'];
                return $width;
            }
        }

        //get item height
        public function getItemHeight($name){
            $stmt = $this->conn->query("SELECT * FROM items WHERE name = '$name'");
            while($row = $stmt->fetch()){
                $height = $row['height'];
                return $height;
            }
        }

        //update item weight
        public function updateItemWeight($name, $weight){
            $stmt = $this->conn->query("
                UPDATE items
                SET weight = $weight
                WHERE name = '$name'
            ");
            return $stmt;
        }

        //update item length
        public function updateItemLength($name, $length){
            $stmt = $this->conn->query("
                UPDATE items
                SET length = $length
                WHERE name = '$name'
            ");
            return $stmt;
        }

        //update item weight
        public function updateItemWidth($name, $width){
            $stmt = $this->conn->query("
                UPDATE items
                SET width = $width
                WHERE name = '$name'
            ");
            return $stmt;
        }

        //update item weight
        public function updateItemheight($name, $height){
            $stmt = $this->conn->query("
                UPDATE items
                SET height = $height
                WHERE name = '$name'
            ");
            return $stmt;
        }

        //create new item
        public function createNewItem($name, $weight, $length, $width, $height){
            $stmt = $this->conn->query("
                INSERT INTO items (name, weight, length, width, height)
                VALUES ('$name', $weight, $length, $width, $height);
            ");
            return $stmt;
        }

        //get all items
        public function getAllItems(){
            $stmt = $this->conn->query("SELECT name FROM items");
            $allItemsArray = [];
            foreach ($stmt->get_result() as $row){
                $allItemsArray[] = $row['name'];
            }
            return json_encode($allItemsArray);
        }

    }

?>