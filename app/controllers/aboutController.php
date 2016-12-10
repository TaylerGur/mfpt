<?php

function index(){
 $data['about'] = model('about');
//    global $res;
//print_r($m);
//    echo'sds';
//        echo(model('about'));
    // view('head');
    // view('menu_about');
//    view('gallery_block');
    // view('about',$data);
    // view('footer');
   print_r(global_data('db'));
//print_r(extract($data));
//print_r($about);
}



?>