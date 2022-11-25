<?php 
    namespace Medoo;
    require 'Medoo.php';

    if(!isset($database)){
        $database = new Medoo([
            // [required]
             
        ]);
    }
?>