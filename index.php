<?php
        

        //две константы, корень сайта и корневая папка
        define('PATH', $_SERVER["SERVER_NAME"]);
		define('ROOT', dirname(__FILE__));
       
        
        //        подключаем все добро и магию. 
        

        //все функции которые вам нужны для нормальной жизни
                include_once(ROOT.'/app/lib/functions.php');
        //тут храним все данные о базе и дефолтном контроллере.
		include_once (ROOT.'/app/lib/config.php');
        
        //подключение к базе используя данные конфига
		include_once (ROOT.'/app/lib/db.php');
            
        //парсит (читает и разбивает) вашу строку на переменные и иницирует запуск всей магии (нужного  
        //контроллера) 
		include_once(ROOT.'/app/lib/routes.php');


?>
