<?php
var_dump('funzioni');

session_start();

// stringa composta o da lettere o da numeri o da simboli
$str = '';
// lunghezza password con o meno la riduzione se è stato selezionato solo lettere,numeri o simboli
$lunghezzaConFiltri = 0;
// qtà di carratteri che l'utente ha scelto
$qtyLetters = 0;

$password = '';

$qtyLetters = (isset($_GET['lunghezzaCaratteri']) ) ? intval( $_GET['lunghezzaCaratteri']) : '';
$ripetizioni = (isset($_GET['radioValue']) ) ? ( $_GET['radioValue']) : '';

var_dump($qtyLetters, $ripetizioni);

$arrayScelte = [
    [
        'type' => 'lettere',
        'arguments' => 'abcdefghijklmnopqrstuwxyvz',
        'active' => ( isset( $_GET['checkboxLettere']) ) ? true : false
    ],
    [
        'type' => 'numeri',
        'arguments' => '0123456789',
        'active' => (isset( $_GET['checkboxNumeri']) ) ? true : false
    ],
    [
        'type' => 'simboli',
        'arguments' => '!?&%$><^+-*/()[]{}@#_=',
        'active' => (isset( $_GET['checkboxSimboli']) ) ? true : false
    ],
];

var_dump($arrayScelte);

foreach($arrayScelte as $elem ) {
    if ( $elem['active'] ) {
        $str .= $elem['arguments'];
        $lunghezzaConFiltri += strlen( $elem['arguments'] );
    }
};

var_dump($str, $lunghezzaConFiltri);

function generaPassword($qtyLetters, $password, $lunghezzaConFiltri, $str,  $ripetizioni ) {

    if ($qtyLetters > 0 && $lunghezzaConFiltri > 0) {
        
        if ($ripetizioni == 'no') {
            
            for ($i = 0; strlen($password) < $qtyLetters ; $i++) { 
                $letteraRandom = $str[ rand(0, strlen( $str) - 1 ) ];

                if ( !preg_match( "/letteraRandom/", $password ) ) {
                    $password .= $letteraRandom;
                }
                
            } 

        } else {
            for ($i = 0; strlen($password) < $qtyLetters ; $i++) { 
                $password .= $str[ rand(0, strlen( $str) - 1 ) ];
            }
        }    
    } 

    return $password;
};

var_dump(generaPassword( $qtyLetters, $password, $lunghezzaConFiltri, $str,  $ripetizioni ));

$_SESSION['password'] = generaPassword( $qtyLetters, $password, $lunghezzaConFiltri, $str,  $ripetizioni );

?>