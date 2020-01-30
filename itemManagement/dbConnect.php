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

            $servername = "us-cdbr-iron-east-04.cleardb.net";
            $username = "bbc0c39e767f31";
            $password = "ff6732e0";
            $dbname = "heroku_0584f2ae52fda11";
            $charset = "utf8mb4";

            $conn = new mysqli($servername, $username, $password, $dbname);
            return $conn;

        }

    }

?>