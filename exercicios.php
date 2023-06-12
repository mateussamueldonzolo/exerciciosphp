<?php

/*Primeiro exercício*/

$idade = 25;
$maioridade = true; 

if($idade>=18){
    echo("True");
}else{
    echo("False");
}


/*SEGUNDO */

$nome = "Paulo";
$sobrenome = "Cangoma";

$nomecompleto = $nome." ".$sobrenome ;
echo($nomecompleto);

/*TERCEIRO*/

$preco = 50.99;
$desconto = 0.1;
$precoComDesconto = $preco - ($desconto*$preco);
echo($precoComDesconto);

/*QUARTO */

$numero = 7;
$resultado = $numero;

if($resultado%2==0){
    echo'O número é par';
}else{
    echo'O número é impar';
}

/*QUINTO*/

$anoatual = 2023;
$anonascimento = 1996;

$idade = $anoatual - $anonascimento;
echo($idade);

/*SEXTO */

$num1 = 10;
$num2 = 5;

if($num1>$num2){
    echo'Numero um é maior';
}else{
    echo'Numero dois é menor';
}

/*SETIMO*/

$nome = "Jõao";
$temnome = $nome != ""?"Sim":" Não";
echo($temnome);


/*OITAVO*/

$numero = 3;
$resultado = $numero;

if($resultado>=0){

}

/*NONO*/

$salario = 2000;
$imposto = 0.2;
$salarioliquido = $salario - ($imposto*$salario);
echo ($salarioliquido);

/*DÉCIMO*/

$idade = 16;
$tempermissão = $idade;

if($tempermissão >=18){
    echo'Sim';
}else{
    echo'Não';
}



?>