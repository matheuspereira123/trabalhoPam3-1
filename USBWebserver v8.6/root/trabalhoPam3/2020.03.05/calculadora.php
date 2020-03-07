<?php


if( 
    !isset($_REQUEST["v1"] ) || 
            $_REQUEST["v1"] == ""||
    !isset($_REQUEST["v2"] ) ||
            $_REQUEST["v2"] == ""
    !isset($_REQUEST["operador"] ) ||
            $_REQUEST["operador"] == ""
){


    echo "Parâmetros inválidos. Não da pra fazer a conta.";
    exit;
}

    $v1 = $_REQUEST["v1"];
    $v2 = $_REQUEST["v2"];
    $operador = $_REQUEST["operador"];
    $result = "";
    $arrayJson = array();


    if( !is_numeric($v1) ){
        echo "Voce informou parâmetro que não é numero ";
            exit;
    } 

        if( !is_numeric($v2) ){
            echo "Voce informou parâmetro que não é numero ";
            exit;
        }

        if($operador =="-" {
            $result = $v1 - $v2;
            $arrayJson["subtracao"] = $result ;
            
        })else if($operador == "*"{
            $result = $v1 * $v2;
            $arrayJson["Multiplicacao"] = $result;
        })
        })else if($operador == "/"{
            $result = $v1 / $v2;
            $arrayJson["Divisao"] = $result;
        })
        })else if($operador == "S"{
            $result = $v1 * $v2;
            $arrayJson["Soma"] = $result;
        })else{
            echo "Você não indicou uma operação válida";
            exit;
        }
            // comentario github ..

        echo json_encode($arrayJson);
        ?>

        