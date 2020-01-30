<?php

    require_once "dbConnect.php";

    class Item{

        $servername = "us-cdbr-iron-east-04.cleardb.net";
        $username = "bbc0c39e767f31";
        $password = "ff6732e0";
        $dbname = "heroku_0584f2ae52fda11";
        $charset = "utf8mb4";

        $conn = new mysqli($servername, $username, $password, $dbname);

        //get item weight
        public function getItemWeight($name){
            $stmt = $conn->query("SELECT * FROM items WHERE name = '$name'");
            while($row = $stmt->fetch()){
                $weight = $row['weight'];
                return $weight;
            }
        }

        //get item length
        public function getItemLength($name){
            $stmt = $conn->query("SELECT * FROM items WHERE name = '$name'");
            while($row = $stmt->fetch()){
                $length = $row['length'];
                return $length;
            }
        }

        //get item width
        public function getItemWidth($name){
            $stmt = $conn->query("SELECT * FROM items WHERE name = '$name'");
            while($row = $stmt->fetch()){
                $width = $row['width'];
                return $width;
            }
        }

        //get item height
        public function getItemHeight($name){
            $stmt = $conn->query("SELECT * FROM items WHERE name = '$name'");
            while($row = $stmt->fetch()){
                $height = $row['height'];
                return $height;
            }
        }

        //update item weight
        public function updateItemWeight($name, $weight){
            $stmt = $conn->query("
                UPDATE items
                SET weight = $weight
                WHERE name = '$name'
            ");
            return $stmt;
        }

        //update item length
        public function updateItemLength($name, $length){
            $stmt = $conn->query("
                UPDATE items
                SET length = $length
                WHERE name = '$name'
            ");
            return $stmt;
        }

        //update item weight
        public function updateItemWidth($name, $width){
            $stmt = $conn->query("
                UPDATE items
                SET width = $width
                WHERE name = '$name'
            ");
            return $stmt;
        }

        //update item weight
        public function updateItemheight($name, $height){
            $stmt = $conn->query("
                UPDATE items
                SET height = $height
                WHERE name = '$name'
            ");
            return $stmt;
        }

        //create new item
        public function createNewItem($name, $weight, $length, $width, $height){
            $stmt = $conn->query("
                INSERT INTO items (name, weight, length, width, height)
                VALUES ('$name', $weight, $length, $width, $height);
            ");
            return $stmt;
        }

        //get all items
        public function getAllItems(){
            $stmt = $conn->query("SELECT name FROM items");
            $allItemsArray = [];
            while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
                $allItemsArray[] = $row['name'];
            }
            return json_encode($allItemsArray);
        }

    }

?>