<?php
$dataAtual = new \DateTime(time('now'), new \DateTimeZone(timezone:'America/Sao_Paulo'));
$dataVencimento = filter_input(INPUT_POST,'dataVencimento', FILTER_DEFAULT);
$dataVencimento2 = new \DateTime($dataVencimento, new \DateTimeZone(timezone:'America/Sao_Paulo'));

var_dump($dataAtual);
var_dump($dataVencimento2);

$dataVencimento2->diff($dataAtual);

if($dataDiff->invert === 0){
    echo "Esse boleto já venceu";
}else{
    echo "Voce pode pagar o boleto!";
}
