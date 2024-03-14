<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$wys = $_REQUEST ['wys'];
$op = $_REQUEST ['op'];
$lata = $_REQUEST ['lata'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($wys) && isset($op) && isset($lata))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $wys == "") {
	$messages [] = 'Nie podano wysokości kredytu';
}
if ( $op == "") {
	$messages [] = 'Nie podano oprocentowania';
}
if ( $lata == "") {
	$messages [] = 'Nie podano ilości lat';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $wys )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $op )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $lata )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
	
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$wys = intval($wys);
	$op = intval($op);
	$lata = intval($lata);
	
	$result = ($wys+$wys*($op/100))/($lata*12);
	
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';