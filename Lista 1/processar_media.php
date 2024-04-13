<?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $faltas = $_POST['faltas'];
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if (($media >= 6) && ($faltas <= 10)){
        echo "Aprovado!";
    } else {
        echo "Reprovado";
    }

    $vetor = array(10, 20, 30);
    echo $vetor[1];
    $vetor[3] = 40;
    echo "<br/>" .$vetor[3];
    $vetor["tio"] = "tio";

    echo "Valores do vetor: <br/>";

    foreach($vetor as $p => $v){
        echo "Posição" . $p . "= $v <br/>";
    }
    print_r($vetor);
    var_dump($vetor);
