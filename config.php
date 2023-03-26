<?php 

        
        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];
        
        
        define('HOST','http://'.$host.'/premier/');
        define('ROOT',$root.'/premier');
        
        define('CONTROLLER',ROOT.'/Controllers/');
        define('VIEW',ROOT.'/view/');
        define('MODEL',ROOT."/model/");
        define('CLASSES',ROOT."/classes/");
        define('OBJET',MODEL.'/class/');

?>
