<?php

class titleCtrl{
    public function generateView(){
        
getSmarty()->assign('page_title','Kalkulator');
getSmarty()->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece smarty');
getSmarty()->assign('page_header','Szablony smarty');

getSmarty()->display('title.html');

    }
}