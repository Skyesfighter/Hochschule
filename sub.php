<?php
require_once 'Calculator.php';

$a      = $_GET['a'];
$b      = $_GET['b'];


// addiere die Zahlen über die Calculator Klasse
$calc = new Calculator();
$result = $calc->sub($a, $b);

echo "Das Ergebnis lautet: $result";