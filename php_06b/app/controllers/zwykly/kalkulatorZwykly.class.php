<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.
namespace app\controllers\zwykly;

use app\forms\CalcForm;
use app\transfer\CalcResult;


 
class kalkulatorZwykly {
    
    private $msgs;   //wiadomości dla widoku
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku
    
    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct(){
        //stworzenie potrzebnych obiektów
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }
    
    /**
     * Pobranie parametrów
     */
    public function getParams(){
        $this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
        $this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
        $this->form->op = isset($_REQUEST ['op']) ? $_REQUEST ['op'] : null;
    }
    
    /**
     * Walidacja parametrów
     * @return true jeśli brak błedów, false w przeciwnym wypadku
     */
    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->op ))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false; //zakończ walidację z błędem
        } 
        
        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->x == "") {
            getMessages()->addError('Nie podano liczby 1');
        }
        if ($this->form->y == "") {
            getMessages()->addError('Nie podano liczby 2');
        }
        
        // nie ma sensu walidować dalej gdy brak parametrów
        if (! getMessages()->isError()) {
            
            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (! is_numeric ( $this->form->x )) {
                getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
            }
            
            if (! is_numeric ( $this->form->y )) {
                getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
            }
        }
        
        return ! getMessages()->isError();
    }
    
    /**
     * Pobranie wartości, walidacja, obliczenie i wyświetlenie
     */
    public function action_zwyklyProcess(){
        
        $this->getparams();
        
        if ($this->validate()) {
            
            //konwersja parametrów na int
            $this->form->x = intval($this->form->x);
            $this->form->y = intval($this->form->y);
            getMessages()->addInfo('Parametry poprawne.');
            
            //wykonanie operacji
            switch ($this->form->op) {
                case 'minus' :
                    $this->result->result = $this->form->x - $this->form->y;
                    $this->result->op_name = '-';
                    break;
                case 'times' :
                    $this->result->result = $this->form->x * $this->form->y;
                    $this->result->op_name = '*';
                    break;
                case 'div' :
                    $this->result->result = $this->form->x / $this->form->y;
                    $this->result->op_name = '/';
                    break;
                default :
                    $this->result->result = $this->form->x + $this->form->y;
                    $this->result->op_name = '+';
                    break;
            }
            
            getMessages()->addInfo('Wykonano obliczenia.');
        }
        
        $this->generateView();
    }
    public function action_kalkulatorZwykly(){        
        $this->generateView();
    }
   
    public function generateView(){
        
        getSmarty()->assign('page_title','Kalkulator');
        getSmarty()->assign('page_header','Obiekty w PHP');
        
        
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);
        
        getSmarty()->display('kalkulatorZwykly.html');
    }
}
