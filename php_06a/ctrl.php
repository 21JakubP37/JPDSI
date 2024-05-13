<?php

require_once 'init.php';

getConf()->login_action = 'login';

switch ($action) {
    default :
        control('app\\controllers\\title', 'title', 'generateView');
    case 'login':
        if (checkLoginStatus()){
            control('app\\controllers\\title', 'title', 'generateView');
        } else{
        control('app\\controllers\\login', 'LoginCtrl',	'doLogin');
        }
    case 'kalkulatorZwykly' :
        control('app\\controllers\\zwykly', 'kalkulatorZwykly', 'process', ['user','admin']);
    case 'kalkulatorKredytowy' :
        control('app\\controllers\\kredytowy', 'kalkulatorKredytowy', 'process', ['user','admin']);
    case 'logout' :
        control('app\\controllers\\login', 'LoginCtrl', 'doLogout', ['user','admin']);
    case 'title' :
        control('app\\controllers\\title', 'title', 'generateView');
}
