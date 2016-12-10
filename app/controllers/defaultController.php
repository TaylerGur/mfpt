<?php 

    $data['a'] = 'aaa';
    $data['b'] = 'bbb';
    $data['c'] = 'ccc';
    $data['d'] = 'ddd';
function index(){
    echo "Я контроллер по-умолчанию, для того чтобы сменить меня, перейдите в 'ваш_сайт/app/lib/config.php'";
 

    function ab(){
    	global $data;
    	print_r($data);
    }
    ab();

    // extract($data);
    // echo '<br>';
    // echo $c;
    // print_r($data);
}

//echo "contrl";


function b($a){
    print_r($a);
}




?>