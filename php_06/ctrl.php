<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once 'init.php';

//1. pobierz nazwę akcji

//2. wykonanie akcji
switch ($action) {
	default : 
	    $ctrl = new app\controllers\title\title;
		$ctrl->generateView();
		
	break;
	case 'kalkulatorZwykly':
	    include 'check.php';
	    $ctrl = new app\controllers\zwykly\kalkulatorZwykly();
		$ctrl->process ();
	break;
	case 'kalkulatorKredytowy':
	    include 'check.php';
	    $ctrl = new app\controllers\kredytowy\kalkulatorKredytowy();
	    $ctrl->process();
	    	    break;
	case 'login':
	    $ctrl = new app\controllers\login\LoginCtrl();
	    $ctrl->doLogin();
	    break;
	case 'logout':
	    include 'check.php';
	    $ctrl = new app\controllers\login\LoginCtrl();
	    $ctrl->doLogout();
	    break;
	case 'title':
	    $ctrl = new  app\controllers\title\title;
	    $ctrl->generateView();
	    break;
}
