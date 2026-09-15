<?php
$peso = (float) readline("Digite seu peso (ex: 70.5): ");
$altura = (float) readline("Digite sua altura (ex: 1.75): ");

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Abaixo do peso\n";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Peso normal\n";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Sobrepeso\n";
} else {
    echo "Obesidade\n";
}
?>