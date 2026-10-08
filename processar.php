<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $destinatario = $_POST['destinatario'];
    $codigo = $_POST['codigo'];
    $cidade = $_POST['cidade'];
    $peso = $_POST['peso'];
    $valor = 19.9;

    echo "Destinatário: " . $destinatario . "<br>";
    echo "Código: " . $codigo . "<br>";
    echo "Cidade: " . $cidade . "<br>";
    echo "Peso: " . $peso . "<br>";
    echo "Valor: " . $valor;


}


?>