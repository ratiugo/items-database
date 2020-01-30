<?php

    class itemsDatabase {

        // Please create a database with the following items and measurements in order to use the app:

        //     Fiddle: 1 kg, 60cm x 20cm x 10cm
        //     Dish: 0.1 kg, 30cm 30cm x 5cm
        //     Spoon: 0.05kg, 15cm x 5cm x 2xm

        // Enter your database information

        public function connect(){

            $url = parse_url(getenv("mysql://b4dd3dae1de623:9dd61eb4@us-cdbr-iron-east-04.cleardb.net/heroku_1d2208bffa1b10a?reconnect=true"));

            $server = $url["us-cdbr-iron-east-04.cleardb.net"];
            $username = $url["b4dd3dae1de623"];
            $password = $url["9dd61eb4"];
            $db = substr($url["heroku_1d2208bffa1b10a"], 1);

            $conn = new mysqli($server, $username, $password, $db);
            return $conn;
        }

    }

?>