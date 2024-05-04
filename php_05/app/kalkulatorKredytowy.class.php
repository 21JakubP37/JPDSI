<?php


require_once $conf->root_path.'/libs/Smarty.class.php';
require_once $conf->root_path.'/app/CalcKredForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';




class calcKredCtrl {
    
    private $form;
    private $msgs;
    private $result;
    
    public function __construct(){
        
        $this->msgs = new Messages();
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
            $this->msgs->addError('Nie podano wysokosci');
        }
        if ($this->form->oprocentowanie == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }
        if ($this->form->dlugosc == "") {
            $this->msgs->addError('Nie podano dlugosci');
        }
        
        
        
        if (! $this->msgs->isError()) {
            
            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (! is_numeric ( $this->form->wysokosc )) {
                $this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
            }
            
            if (! is_numeric ( $this->form->oprocentowanie )) {
                $this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
            }
            if (! is_numeric ( $this->form->dlugosc )) {
                $this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
            }
        }
        
        return ! $this->msgs->isError();
    }
    public function process(){
        
        $this->getparams();
        
        if ($this->validate()) {
            
            //konwersja parametrów na int
            $this->form->wysokosc = intval($this->form->wysokosc);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);
            $this->form->dlugosc = intval($this->form->dlugosc);
            $this->msgs->addInfo('Parametry poprawne.');
            
            //wykonanie operacji
            $this->result->result = ($this->form->wysokosc + $this->form->wysokosc * ($this->form->oprocentowanie /100)) / ($this->form->dlugosc * 12);
            
            $this->msgs->addInfo('Wykonano obliczenia.');
        }
        
        $this->generateView();
    }
    public function generateView(){
        global $conf;
        
        $smarty = new Smarty();
        $smarty->assign('conf',$conf);
        
        $smarty->assign('page_title','Przykład 05');
        $smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
        $smarty->assign('page_header','Obiekty w PHP');
        
        
        $smarty->assign('msgs',$this->msgs);
        $smarty->assign('form',$this->form);
        $smarty->assign('res',$this->result);
        
        $smarty->display($conf->root_path.'/app/kalkulatorKredytowy.html');
    }
}
