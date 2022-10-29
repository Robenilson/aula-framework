<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PacienteController extends Controller
{
 function  calcularIMC( $nome, $peso ,$altura,$genero){
$genero=strtolower($genero);
$nome=strtolower($nome);
$nome=ucfirst($nome);
$statusgenero;
$statusPeso;
//Valida Peso e  altura
if (floatval($peso) ==0){
        $statusPeso="  <div class='alert  alert-danger' role='alert'>Informe apenas valores válidos <br>  -Seguimento de URL peso recebeu um valor não numérico </div>";
         return view("result", compact( 'statusPeso'));
    }
if (floatval($altura)==0) {
    $statusPeso=" <div class='alert  alert-danger' role='alert'> Informe apenas valores válidos <br>  - Seguimento de URL altura recebeu um valor não numérico </div>";
    return view("result", compact( 'statusPeso'));
}
// Valida Genero
if( $genero ==="masculino" )  $statusgenero='Sr  ';
else if( $genero ==="feminino" )  $statusgenero='Sra  ';
else{
    $statusPeso="  <div class='alert  alert-danger' role='alert'>  Informe apenas valores válidos <br> -Seguimento de URL recebeu um valor diferente de masculino ou feminino <\div>";
    return view("result", compact( 'statusPeso'));
}
//Calcula IMC
$imc =$peso/($altura**2);
$imc=round($imc, 1);
// Analisado IMC
if ( $imc < 18.5){
    $statusPeso="  <div class='alert  alert-danger' role='alert'> $statusgenero  $nome Abaixo do peso </div>";
}
else if($imc > 18.5 &&  $imc < 24.9 )  {
    $statusPeso="  <div class='alert alert-success' role='alert'>  $statusgenero  $nome Peso ideal (parabéns) </div>";
}
else if($imc > 25.0 &&  $imc < 29.9 )  {
    $statusPeso="  <div class='alert  alert-danger' role='alert'>  $statusgenero  $nome Levimente acima do peso </div>";
}
else if($imc > 30.0 &&  $imc < 34.9 )   {
    $statusPeso="  <div class='alert  alert-danger' role='alert'> $statusgenero  $nome Obesidade grau | </div>";
}
else if($imc > 35.0 &&  $imc < 39.9 )  {
    $statusPeso="  <div class='alert  alert-danger' role='alert'> $statusgenero  $nome  Obesidade grau || (severa) </div>";
}
else if($imc > 40 ) {
    $statusPeso="  <div class='alert  alert-danger' role='alert'>  $statusgenero  $nome  Obesidade grau ||| (mórbida)</div>";
}
return view("result", compact( 'statusPeso'));
//"Olá $statusgenero $nome, seu IMC é $imc. Você tem ";
  }
}
