<?php
// KONTROLER stronwartosc2 kalkulatora
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/libs/Smarty.class.php';

//załaduj smarty
class titleCtrl{
    public function generateView(){
        
    
global $conf;

$smarty = new smarty();
$smarty->assign('conf',$conf);
$smarty->assign('app_url',$conf->app_url);
$smarty->assign('root_path',$conf->root_path);
$smarty->assign('page_title','Kalkulator');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece smarty');
$smarty->assign('page_header','Szablony smarty');

$smarty->display($conf->root_path.'/app/title.html');

    }
}