<?php

    require_once "dbConnect.php";

    class Item extends itemsDatabase{

        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        $server = $url["us-cdbr-iron-east-04.cleardb.net"];
        $username = $url["b4dd3dae1de623"];
        $password = $url["9dd61eb4"];
        $db = substr($url["heroku_1d2208bffa1b10a"], 1);

        $conn = new mysqli($server, $username, $password, $db);

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