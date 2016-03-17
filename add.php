<?php
require_once 'Calculator.php';

// TIPP: $_GET auslesen:
// var_dump($_GET);

// hole zwei zahlen über GET => Tipp $_GET enthält alle Variablen aus dem Query_String

$a      = $_GET['a'];
$b      = $_GET['b'];


// addiere die Zahlen über die Calculator Klasse
$calc = new Calculator();
$result = $calc->add($a, $b);

echo "Das Ergebnis lautet: $result";

/**$calc = new Calculator();
class Calculator
{
    public function __construct() {
    echo $this->add($_GET['a'], $_GET['b']);
        }
    public function add($a, $b){
        $x = $a + $b;
        return $x;
    }
}
 */