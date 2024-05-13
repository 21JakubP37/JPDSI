<?php

require_once 'init.php';


getRouter()->setDefaultRoute('title');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('kalkulatorZwykly', 'zwykly\\kalkulatorZwykly', ['user','admin']);
getRouter()->addRoute('zwyklyProcess', 'zwykly\\kalkulatorZwykly', ['user','admin']);
getRouter()->addRoute('login', 'login\\LoginCtrl');
getRouter()->addRoute('logout', 'login\\LoginCtrl', ['user','admin']);
getRouter()->addRoute('kalkulatorKredytowy', 'kredytowy\\kalkulatorKredytowy', ['user','admin']);
getRouter()->addRoute('kredProcess', 'kredytowy\\kalkulatorKredytowy', ['user','admin']);
getRouter()->addRoute('title', 'title\\title');

getRouter()->go();
