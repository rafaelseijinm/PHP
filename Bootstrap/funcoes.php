<?php 
    function exibirData(){
        echo "Hoje é dia ".date("d");
    }

    function somar($n1, $n2){
        return $n1 + $n2;
    }

    function subtrair($n1, $n2){
        return $n1 - $n2;
    }

    function multiplicar($n1, $n2){
        return $n1 * $n2;
    }

    function positivoNegativo($valor){
        if($valor > 0){
            return "Valor positivo!";
        } elseif($valor <0) {
            return "Valor Negativo!";
        } else {
            return "Igual a zero!";
        }
    }
    function somarIgual($numero01, $numero02){
        if(isset($_POST['numero01']) && $_POST['numero01'] != '' && isset($_POST['numero02']) && $_POST['numero02'] != ''){
            $numero01 = $_POST['numero01'];
            $numero02 = $_POST['numero02'];
            $soma = $numero01 + $numero02;
            if($numero01 == $numero02)
            {
                $triplo = $soma*3;
                echo "Valores iguais. O triplo da soma é igual a $triplo.";
            }
            else{
                echo "A soma é igual a $soma.";
            }
            
        }else{
            echo "Número não informado.";
        }
    }

    function Tabuada($numero){
        if(isset($_POST['numero']) && $_POST['numero'] != "")
        {
            $numero = $_POST['numero'];
            echo "<h3>Entrada = $numero </h3>";
            for($i = 0; $i<=10; $i++){
                $calc = $numero * $i;
                echo "<h3>$numero X $i = $calc </h3>";
            }
        }
        else{
            echo "<h3>Número Inválido</h3>";
        }
    }

    function Fatorial($numero){
        if(isset($_POST['numero']) && $_POST['numero'] != "")
        {
            $numero = $_POST['numero'];
            echo "<h3>Entrada = $numero </h3>";
            $fat = 1;
            for($i = 1; $i<=$numero; $i++){
                $fat = $fat * $i;
            }
            echo "<h3>Fatorial: $fat</h3>";
        }
        else{
            echo "<h3>Número Inválido</h3>";
        }
    }

    function numeroCrescente($numero01, $numero02){
        if(isset($_POST['numero01']) && $_POST['numero01'] != '' && isset($_POST['numero02']) && $_POST['numero02'] != '')
        {
            $numero01 = $_POST['numero01'];
            $numero02 = $_POST['numero02'];
            if($numero01 > $numero02)
            {
                echo "<h3> $numero02 , $numero01 </h3>";
            }elseif($numero01 < $numero02){
                echo "<h3> $numero01 , $numero02 </h3>";
            }else{
                echo "<h3>Números iguais: $numero01 </h3>";
            }
        }
        else{
            echo "<h3>Número Inválido</h3>";
        }
    }