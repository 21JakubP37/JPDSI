<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$wysokoscKredytu,&$oprocentowanie,&$lata){
	$wysokoscKredytu = isset($_REQUEST['wysokoscKredytu']) ? $_REQUEST['wysokoscKredytu'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$wysokoscKredytu,&$oprocentowanie,&$lata,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
    if ( ! (isset($wysokoscKredytu) && isset($oprocentowanie) && isset($lata))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $wysokoscKredytu == "") {
		$messages [] = 'Nie podano wysokości';
	}
	if ( $oprocentowanie == "") {
		$messages [] = 'Nie podano oprocentowania';
	}
	if ( $lata == "") {
	    $messages [] = 'Nie podano długości kredytu (lata)';
	}
	
	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $wysokoscKredytu )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $lata )) {
	    $messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
	
	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$wysokoscKredytu,&$oprocentowanie,&$lata,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$wysokoscKredytu = intval($wysokoscKredytu);
	$oprocentowanie = intval($oprocentowanie);
	$lata = intval($lata);
	
	//wykonanie operacji
	$result = ($wysokoscKredytu + $wysokoscKredytu * ($oprocentowanie / 100)) / ($lata * 12);
	
	return $result;
}

//definicja zmiennych kontrolera
$wysokoscKredytu = null;
$oprocentowanie = null;
$lata = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($wysokoscKredytu,$oprocentowanie,$lata);
if ( validate($wysokoscKredytu,$oprocentowanie,$lata,$messages) ) { // gdy brak błędów
    process($wysokoscKredytu,$oprocentowanie,$lata,$messages,$result);
}


// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';