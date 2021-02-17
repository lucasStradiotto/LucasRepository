<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Desafio</title>
</head>
<body>

<?php

// Função trazer numero de telefone válido
echo "Função trazer numero de telefone válido";
echo"<br>";

$telefone = "(123) 456-7890";

echo "Numero informado $telefone";
echo"<br>";
echo"Resultado: ";
echo" ";

if (numeroTelefone($telefone) == true){
    echo "true";
} else {
    echo "false";
}
function numeroTelefone($telefone){

    $filtroNumeroTelefone = filter_var($telefone, FILTER_SANITIZE_NUMBER_INT);
    $checarTelefone = str_replace("-", "", $filtroNumeroTelefone);
    
    if(strlen($checarTelefone) == 10){
        return true;
    } else {
        return false;
    }
}

echo "<br>";
echo "<br>";

// Função remover caracteres especiais
echo "Função remover caracteres especiais";
echo "<br>";

$palavra = "Pr$%#%&&*ogramação!@#$%¨&*";

echo "String informada $palavra";
echo "<br>";
echo "Resultado: ";

removeEspecial($palavra);

function removeEspecial($palavra){

    echo(str_replace(array("!", "@", "#", "$", "%", "¨", "&", "*", "(", ")"), "",$palavra));
}

echo "<br>";
echo "<br>";

// Sistema de pontuação
echo"Função Sistema de pontuação";
echo "<br>";

$pontuacaoFinal = [];
$pontuacao = "AAAABBBCCCCC";

echo "Pontuação informada $pontuacao";
echo "<br>";
echo "Resultado: ";

pontuacao($pontuacao);

function pontuacao($pontuacao){

    $ana = 0;
    $bruna = 0;
    $caio = 0;
    $numChar = strlen($pontuacao);
    for ($i=0; $i < $numChar; $i++){
        if($pontuacao[$i] == 'A'){
            $ana = $ana + 1;
            $pontuacaoFinal[0] = $ana;
        }
        if($pontuacao[$i] == 'B'){
            $bruna = $bruna + 1;
            $pontuacaoFinal[1] = $bruna;
        }
        if($pontuacao[$i] == 'C'){
            $caio = $caio + 1;
            $pontuacaoFinal[2] = $caio;
        }
    }

    echo "Pontuação Final: A -  $pontuacaoFinal[0], ", "B - $pontuacaoFinal[1], ", " C - $pontuacaoFinal[2];";
}

echo "<br>";
echo "<br>";

//Função Multiplicar valores
echo "Função Multiplicar Valores";
echo "<br>";

$valor = 5;

echo"Valor informado $valor";
echo "<br>";
echo "Resultado: ";

multiplicarValor($valor);

function multiplicarValor($valor){

    $resultado = $valor;

    for($i=$valor-1;$i>0;$i--){
        $resultado = $resultado * $i;
    }
    echo $resultado;
}

?>
    
</body>
</html>