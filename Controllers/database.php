<?php
        define("DBHOST","localhost");
        define("DBUSER","root");
        define("DBPASS","1234");
        define("DBNAME","testpdo");

        $dsn = "mysql:dbname=".DBNAME.";host:".DBHOST;
        try{
            $con = new PDO($dsn,DBUSER,DBPASS);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
             echo $e->getMessage()." ".$e->getFile()." ".$e->getLine();
        }

?>