<?php

$valor_compra = (float) readline("Digite o valor da compra: ");
$possui_cupom = true;
$status_desconto = true; 

if ($valor_compra > 150 || $possui_cupom == true) {
    $desconto = 10;
    $valor_desconto = $valor_compra * 0.10;
} else {
    $desconto = 0;
    $valor_desconto = 0;
}
$valor_final = $valor_compra - $valor_desconto;

$mensagem = ($desconto > 0) ? "Desconto de 10% aplicado!" : "Não há desconto.";

echo "Valor original: R$ " . $valor_compra . "\n";
echo "Status: " . $status_desconto . "\n";
echo "Valor final: R$ " . $valor_final . "\n";

?>
