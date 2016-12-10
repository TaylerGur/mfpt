<?php
        //Подключаемся к БД
       $db = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'],$config['db_name']);
          
        if(!$db) return 'Соединение с БД - не установлено!';
       
        global_data('db',$db);
   
   

?>