<?php

    class itemsDatabase {

        $url = parse_url(getenv("mysql://b4dd3dae1de623:9dd61eb4@us-cdbr-iron-east-04.cleardb.net/heroku_1d2208bffa1b10a?reconnect=true"));

        $server = $url["us-cdbr-iron-east-04.cleardb.net"];
        $username = $url["b4dd3dae1de623"];
        $password = $url["9dd61eb4"];
        $db = substr($url["heroku_1d2208bffa1b10a"], 1);

        $conn = new mysqli($server, $username, $password, $db);


    }

?>