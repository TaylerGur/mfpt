<?php

	//Проверяем наш url  (учтите он сравнивает не 'yandex.com/' == '/' , а все что будет после слеша и слеш включително )
    //если мы написали только адрес сайта "yandex.com" или "yandex.com/" то сработает по умолчанию дефолтный контроллер из конфига, иначе он будет его пасить.  
	if ($_SERVER['REQUEST_URI'] == '/') {
		$Controller = $config['default_controller'];
		$Function = 'index';

	} else {
        
        // Пример как я буду парсить строку
        //BOS.ua/тут_контроллер/тут_функция/тут_параметр1/тут_параметр2/тут_параметр3.....
        //вот к этому мы будем идти. 
        
        
        //возьмет все что будет после "/" и слеш включительно

		$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        //избавляемся от слеша trim-ом и разбиваем строку на элементы (разделитель будет "/")

		$URL_Parts = explode('/', trim($URL_Path, ' /'));

        //вырезаем из массива первый элемент - это контроллер

		   // print_r($URL_Parts);
		     // echo "<br>";
		$Controller = array_shift($URL_Parts);
		// echo $Controller;
		// echo "<br>";
		//    print_r($URL_Parts);
  //       exit();
         //вырезаем из массива первый элемент - это функция
		$Function = array_shift($URL_Parts);
        //функция была, то все что было после нее это параметры..
		if (!empty($Function)) {
			$Param = array();
			for ($i = 0; $i < count($URL_Parts); $i++) {
				$Param[$i] = $URL_Parts[$i];
			}
		}
		else{
            //Если функции не было, то есть был такой URL  http://BOS.ua/тут_контроллер или http://BOS.ua  функция будет "index"
			$Function = 'index';
		}
	}

    //получаю путь к  контроллеру
	$controllerFile = ROOT . '/app/controllers/' .$Controller. 'Controller.php';
	//проверка на существование, если да - подключаю.
    if (file_exists($controllerFile)) {
		include_once($controllerFile);
        //проверка на существование функции, если да - запускаю и передаю в нее параметры.
		if(function_exists($Function)){
            $Function($Param);
		      
        }
		else{
			echo "error 404 - функция не найдена!";
		}
		
	}
	else{
		echo "error 404 - файл не найден!";
	}









?>