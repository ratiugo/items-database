<?php

    class itemsDatabase {

        private $servername;
        private $username;
        private $password;
        private $dbName;
        private $charset;

        // Please create a database with the following items and measurements in order to use the app:

        //     Fiddle: 1 kg, 60cm x 20cm x 10cm
        //     Dish: 0.1 kg, 30cm 30cm x 5cm
        //     Spoon: 0.05kg, 15cm x 5cm x 2xm

        // Enter your database information
        public function connect(){
            $this->servername = "localhost";
            $this->username = "coltonwilliams";
            $this->password = "";
            $this->dbname = "problem4-items";
            $this->charset = "utf8mb4";

            try {

            $pdo = new PDO("pgsql: host=localhost; dbname=".$this->dbname, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

            } catch (PDOException $e) {
                echo "Connection Failed: ".$e->getMessage();
            }
        }

    }

?>