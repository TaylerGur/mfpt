<?php

function index(){
 $data['about'] = model('about');

    view('head');
    view('menu_about');
   view('gallery_block');
    view('about',$data);
    view('footer');
   

}



?>