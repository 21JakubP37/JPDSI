<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once 'init.php';

//1. pobierz nazwę akcji

//2. wykonanie akcji
switch ($action) {
	default : 
	    // załaduj definicję kontrolera
	    $ctrl = new app\controllers\title\title;
		$ctrl->generateView();
		
	break;
	case 'kalkulatorZwykly' :
	    $ctrl = new app\controllers\zwykly\kalkulatorZwykly();
		$ctrl->process ();
	break;
	case 'kalkulatorKredytowy' :	    
	    $ctrl = new app\controllers\kredytowy\kalkulatorKredytowy();
	    $ctrl->process();
	    
	    break;
	case 'title' :
	    $ctrl = new  app\controllers\title\title;
	    $ctrl->generateView();
	    break;
}
