<?php

function index(){
    
    view('head');
    view('menu_contact');
    view('gallery_block');
    view('contacts');
    view('footer');
    
    
}
function send(){
    $data['name'] = $_POST['name'];
    $data['e_mail'] = $_POST['e_mail'];
    $data['site'] = $_POST['site'];
    $data['text'] = $_POST['text'];
    $res = model('contacts', $data);
      // header("Location: http://kursak.com/contacts");
    exit;
}


?>