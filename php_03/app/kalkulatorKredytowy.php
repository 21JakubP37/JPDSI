<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/libs/Smarty.class.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
//include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$form){
	$form['wysokoscKredytu'] = isset($_REQUEST['wysokoscKredytu']) ? $_REQUEST['wysokoscKredytu'] : null;
	$form['oprocentowanie'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$msgs,&$infos){
	
	
	// sprawdzenie, czy parametry zostały przekazane
    if ( ! (isset($form['wysokoscKredytu']) && isset($form['oprocentowanie']) && isset($form['lata']))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}
	
	
	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['wysokoscKredytu'] == "") {
		$msgs [] = 'Nie podano wysokości';
	}
	if ( $form['oprocentowanie'] == "") {
		$msgs [] = 'Nie podano oprocentowania';
	}
	if ( $form['lata'] == "") {
	    $msgs [] = 'Nie podano długości kredytu (lata)';
	}
	
	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $msgs ) > 0)
	    return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $form['wysokoscKredytu'] )) {
		$msgs [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $form['oprocentowanie'] )) {
		$msgs [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $form['lata'] )) {
	    $msgs [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
	
	if (count ( $msgs ) > 0)
	    return false;
	else
	    return true;
}

function process(&$form,&$msgs,&$infos,&$result){
	//global $role;
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	//konwersja parametrów na int
	$form['wysokoscKredytu'] = intval($form['wysokoscKredytu']);
	$form['oprocentowanie'] = intval($form['oprocentowanie']);
	$form['lata'] = intval($form['lata']);
	
	//wykonanie operacji
	$result = ($form['wysokoscKredytu'] + $form['wysokoscKredytu'] * ($form['oprocentowanie'] / 100)) / ($form['lata'] * 12);
	
	return $result;
}

//definicja zmiennych kontrolera
$form = null;
$result = null;
$messages = array();
$infos = array();


//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form);
if ( validate($form,$messages,$infos) ) { // gdy brak błędów
    process($form,$messages,$infos,$result);
}


$smarty = new smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator Kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece smarty');
$smarty->assign('page_header','Szablony smarty');


//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);


// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/kalkulatorKredytowy.html');
?>