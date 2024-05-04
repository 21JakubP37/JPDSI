<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once dirname (__FILE__).'/../config.php';

//1. pobierz nazwę akcji

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
//2. wykonanie akcji
switch ($action) {
	default : 
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/title.class.php';
		$ctrl = new titleCtrl();
		$ctrl->generateView();
		
	break;
	case 'kalkulatorZwykly' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/Kalkulator/kalkulatorZwykly.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'kalkulatorKredytowy' :
	    include_once $conf->root_path.'/app/Kalkulator/kalkulatorKredytowy.class.php';
	    
	    $ctrl = new calcKredCtrl();
	    $ctrl->process();
	    
	    break;
	case 'title' :
	    include_once $conf->root_path.'/app/title.class.php';
	    $ctrl = new titleCtrl();
	    $ctrl->generateView();
	    break;
}
