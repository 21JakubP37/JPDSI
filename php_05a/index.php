<?php
require_once dirname(__FILE__).'/init.php';

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc.php");

//przekazanie żądania do następnego dokumentu ("forward")

include $conf->root_path.'/ctrl.php';