<?php

function middleware($rota){
    echo"3.middleware está verificando a requisição.<br>";
    $permitido = true;

    if($permitido){
        echo"4. middleware permitiu continuar. <br>";
        dispatcher($rota);

    } else{
        echo"4. middleware bloqueou a requisição.<br>";
    }
}