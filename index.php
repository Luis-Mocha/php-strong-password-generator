<?php
var_dump('index');

//in index sarà sempre possibile vedere il contenuto di "funzioni.php"
include_once __DIR__ . '/include/partials/funzioni.php'; 

include_once __DIR__ . '/include/components/strutturaHtmlTop.php'; 

include __DIR__ . '/include/components/strutturaHtmlBottom.php';

?>
