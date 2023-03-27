<?php

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];
        
        
        define('HOST','http://'.$host.'/coach/');
        define('ROOT',$root.'/coach');
        
        define('CONTROLLER',ROOT.'/Controllers/');
        define('VIEW',ROOT.'/view/');
        define('MODEL',ROOT."/Model/");
        define('ROUTES',ROOT."/Routes/");
        define('OBJET',MODEL.'/classes/');
        define('ASSETS',HOST.'assets/');
