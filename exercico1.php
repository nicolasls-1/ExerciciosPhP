<?php
$cor = readline("Digite a cor do semáforo (Vermelho, Amarelo, Verde): ");
if ($cor == "Vermelho") {
   echo "Pare";
} elseif ($cor == "Amarelo") {
   echo "Atenção";
} elseif ($cor == "Verde") {
   echo "Siga!";
} else {
   echo "Cor Inválida";
}

?>