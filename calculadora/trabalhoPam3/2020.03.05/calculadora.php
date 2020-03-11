<?php

if(!isset($_REQUEST["v1"]) ||
    !isset($_REQUEST["v2"]) ){
    echo"paramentros inválidos. Não da para fazer a conta";
    exit;
}else{
    $_valor = $_REQUEST['v1'] ;
    $_valor2 = $_REQUEST['v2'] ;
}

$_opera = $_REQUEST['opera'] ;
$_resulta = "";

if($_opera == "s"){
    $_resulta["soma"] = $_valor + $_valor2;
}elseif($_opera == "-"){
    $_resulta["subtracao"] = $_valor - $_valor2;
}elseif($_opera == "*"){
    $_resulta["multiplicacao"] = $_valor * $_valor2;
}elseif($_opera == "/"){
    $_resulta["divisao"] = $_valor / $_valor2;
}else{
    $_resulta["erro"] = "Voce informou um operador errado";
}

echo json_encode($_resulta);

?>