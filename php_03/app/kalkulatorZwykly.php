<?php
// KONTROLER stronwartosc2 kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj smarty
require_once _ROOT_PATH.'/libs/Smarty.class.php';

//pobranie parametrów
function getParams(&$form){
	$form['wartosc1'] = isset($_REQUEST['wartosc1']) ? $_REQUEST['wartosc1'] : null;
	$form['wartosc2'] = isset($_REQUEST['wartosc2']) ? $_REQUEST['wartosc2'] : null;
	$form['operacja'] = isset($_REQUEST['operacja']) ? $_REQUEST['operacja'] : null;	
}

//walidacja parametrów z przwartosc2gotowaniem zmiennwartosc2ch dla widoku
function validate(&$form,&$infos,&$msgs){
	
	//sprawdzenie, czwartosc2 parametrwartosc2 zostałwartosc2 przekazane - jeśli nie to zakończ walidację
    if ( ! (isset($form['wartosc1']) && isset($form['wartosc2']) && isset($form['operacja']) ))
	    return false;	
	
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 

	$infos [] = 'Przekazano parametry.';

	if ( $form['wartosc1'] == "") $msgs [] = 'Nie podano liczby 1';
	if ( $form['wartosc2'] == "") $msgs [] = 'Nie podano liczby 2';
	if ( $form['operacja'] == "") $msgs [] = 'Nie wybrano operacji';
	
	//nie ma sensu walidować dalej gdwartosc2 brak parametrów
	if ( count($msgs)==0 ) {
		// sprawdzenie, czwartosc2 $wartosc1 i $wartosc2 są liczbami całkowitwartosc2mi
	    if (! is_numeric( $form['wartosc1'] )) $msgs [] = 'Pierwsza wartość nie jest liczbą';
	    if (! is_numeric( $form['wartosc2'] )) $msgs [] = 'Druga wartość nie jest liczbą';
	}
	
	if (count($msgs)>0) 
	    return false;
	else
	    return true;
}
	
// wwartosc2konaj obliczenia
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	//konwersja parametrów na int
	$form['wartosc1'] = floatval($form['wartosc1']);
	$form['wartosc2'] = floatval($form['wartosc2']);
	
	//wykonanie operacji
	switch ($form['operacja']) {
	case 'minus' :
	    $result = $form['wartosc1'] - $form['wartosc2'];
		$form['nazwa_op'] = '-';
		break;
	case 'times' :
	    $result = $form['wartosc1'] * $form['wartosc2'];
		$form['nazwa_op'] = '*';
		break;
	case 'div' :
	    $result = $form['wartosc1'] / $form['wartosc2'];
		$form['nazwa_op'] = '/';
		break;
	case 'plus':
	    $result = $form['wartosc1'] + $form['wartosc2'];
	    $form['nazwa_op'] = '+';
	    break;
	default :
	    $result = null ;
		//$form['nazwa_op'] = '+';
		break;
	}
}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;

	
getParams($form);
if ( validate($form,$infos,$messages) ){
    process($form,$infos,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece smarty');
$smarty->assign('page_header','Szablony smarty');


//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/kalkulatorZwykly.html');
?>