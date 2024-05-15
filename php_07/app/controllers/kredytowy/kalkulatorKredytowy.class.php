<?php

namespace app\controllers\kredytowy;

use app\forms\CalcKredForm;
use app\transfer\CalcResult;



class kalkulatorKredytowy {
    
    private $form;
    private $msgs;
    private $result;
    
    public function __construct(){
        
        $this->form = new CalcKredForm();
        $this->result = new CalcResult();
    }
    
    public function getParams(){
        $this->form->wysokosc = isset($_REQUEST ['wysokosc']) ? $_REQUEST ['wysokosc'] : null;
        $this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
        $this->form->dlugosc = isset($_REQUEST ['dlugosc']) ? $_REQUEST ['dlugosc'] : null;
    }
    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (! (isset ( $this->form->wysokosc ) && isset ( $this->form->oprocentowanie ) && isset ( $this->form->dlugosc ))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false; //zakończ walidację z błędem
        }
        
        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->wysokosc == "") {
            getMessages()->addError('Nie podano wysokosci');
        }
        if ($this->form->oprocentowanie == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }
        if ($this->form->dlugosc == "") {
            getMessages()->addError('Nie podano dlugosci');
        }
        
        
        
        if (! getMessages()->isError()) {
            
            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (! is_numeric ( $this->form->wysokosc )) {
                getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
            }
            
            if (! is_numeric ( $this->form->oprocentowanie )) {
                getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
            }
            if (! is_numeric ( $this->form->dlugosc )) {
                getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
            }
        }
        
        return ! getMessages()->isError();
    }
    public function action_kredProcess(){
        
        $this->getparams();
        
        if ($this->validate()) {
            
            //konwersja parametrów na int
            $this->form->wysokosc = intval($this->form->wysokosc);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);
            $this->form->dlugosc = intval($this->form->dlugosc);
            getMessages()->addInfo('Parametry poprawne.');
            
            //wykonanie operacji
            $this->result->result = ($this->form->wysokosc + $this->form->wysokosc * ($this->form->oprocentowanie /100)) / ($this->form->dlugosc * 12);
            
            getMessages()->addInfo('Wykonano obliczenia.');
            
            try{
                $database = new \Medoo\Medoo([
                    'database_type' => 'mysql',
                    'database_name' => 'kalkulator',
                    'server' => 'localhost',
                    'username' => 'root',
                    'password' => '',
                    'charset' => 'utf8mb4',
                    'collation' => 'utf8mb4_polish_ci',
                    'port' => '3306',
                    'option' => [
                        \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                    ]
                ]);
                $database -> insert("kalkulatorKredytowy", [
                    "wysokość" => $this->form->wysokosc,
                    "oprocentowanie" => $this->form->oprocentowanie,
                    "długość" => $this->form->dlugosc,
                    "wynik" => $this->result->result
                    
                ]);
            } catch (\PDOException $ex){
                getMessages()->addError($ex->getMessage());
            }
        }
        
        $this->generateView();
    }
    public function action_kalkulatorKredytowy(){
        $this->generateView();
    }
    public function generateView(){
        
        getSmarty()->assign('page_title','Kalkulator Kredytowy');
        getSmarty()->assign('page_header','Obiekty w PHP');
       
        
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);
        
        getSmarty()->display('kalkulatorKredytowy.html');
    }
}
