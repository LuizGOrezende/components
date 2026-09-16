<?php

function router(){
    echo "2. router está analisando a URL.<br>";
    $rota = "/usuarios";
    $parametro = "id=123";
    middleware($rota);
}