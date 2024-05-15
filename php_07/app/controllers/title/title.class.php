<?php

namespace app\controllers\title;

class title{
    public function action_title(){
        $this->generateView();
    }
    public function generateView(){
        
getSmarty()->assign('page_title','Kalkulator');
getSmarty()->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece smarty');
getSmarty()->assign('page_header','Szablony smarty');
getSmarty()->display('title.html');

    }
}