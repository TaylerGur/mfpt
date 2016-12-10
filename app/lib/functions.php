<?php
//функция для подгрузки views втором необязательным параметром можем указывать массив данных.
function view($view, $data1=null ){
			if ($data1 != null) {
                extract($data1);
                
            }

			
            if (file_exists(ROOT.'/app/views/'.$view.'.php')) {
				
				include_once(ROOT.'/app/views/'.$view.'.php');
				
			}
			else{
				echo'<br/> Вид не обнаружена!';
			}

		}
//функция для подгрузки model втором необязательным параметром можем указывать массив данных для работы с БД
function model($model,$param=null ){
            if ($param1 != null) {
                extract($param);
                
            }
            if (file_exists(ROOT.'/app/models/'.$model.'Model.php')) {
				    // global $db;
            	// global_data()
				    
                 $mod =  include_once(ROOT.'/app/models/'.$model.'Model.php');
                 
				return $mod;
               
			}
			else{
				echo'<br/> Модель не обнаружена!';
			}

}


function global_data($element, $value = null){
	global $global_data;

	if($value != null){
		
		$global_data[$element] = $value;
	}
	else{
		// print_r($global_data);
		return $global_data[$element];
	}
}



?>