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

    function metrosParaCentimetros($numero){
        if(isset($_POST['numero']) && $_POST['numero'] != "")
        {
            $numero = $_POST['numero'];
            $centimetros = $numero * 100;
            echo "<h3>$numero metros são $centimetros centimetros. </h3>";
        }
        else{
            echo "<h3>Número Inválido</h3>";
        }
    }

    function pintarArea($numero){
        if(isset($_POST['numero']) && $_POST['numero'] != "")
        {
            $numero = $_POST['numero'];
            $litros = $numero / 3;
            $latas = ceil($litros / 18);
            $custo = $latas * 80;
            echo "<h3>Serão necessárias $latas latas para pintar a área desejada. O Custo total será de R$ $custo</h3>";	
        }
        else{
            echo "<h3>Número Inválido</h3>";
        }
    }

    function calcularIdade($numero){
        define ("ANO_ATUAL", 2024);

        if(isset($_POST['numero']) && $_POST['numero'] != "")
        {
            $anoNascimento = $_POST['numero']; 
            $idade = ANO_ATUAL - $anoNascimento;
            $dias = $idade * 365;
            $idade2025 = 2025 - $anoNascimento;
            echo "<h3> Idade: $idade</h3>";
            echo "<h3> Dias Vividos: $dias </h3>";
            echo "<h3> Idade em 2025: $idade2025 </h3>";
        }
        else{
            echo "<h3>Ano Inválido</h3>";
        }
    }

    function calcularIMC($numero01, $numero02){
        if(isset($_POST['numero01']) && $_POST['numero01'] != "" && isset($_POST['numero02']) && $_POST['numero02'] != "")
        {
            $numero01 = $_POST['numero01'];
            $numero02 = $_POST['numero02'];
            $alturaMetro = $numero02 / 100;
            $imc = $numero01 / ($alturaMetro * $alturaMetro);
            if($imc < 18.5)
            {
                echo "<h3> Abaixo do peso </h3>";
            }elseif($imc >= 18.5 && $imc <= 24.9)
            {
                echo "<h3> IMC: $imc </h3>";
                echo "<h3> Peso ideal </h3>";
            }else
            {
                echo "<h3> IMC: $imc </h3>";
                echo "<h3> Acima do Peso </h3>";
            }
            echo '<a href="https://www.tuasaude.com/imc/"><h3>Link para referência</h3></a>';
        }
        else{
            echo "<h3>Dados inválidos</h3>";
        }
    }

    function menorValor($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7)
        {
            $menor = $_POST['valor1'];
            if(isset($_POST['valor2']) && $_POST['valor2'] < $valor1)
                $menor = $valor2;
            if(isset($_POST['valor3']) && $_POST['valor3'] < $valor2)
                $menor = $valor3;
            if(isset($_POST['valor4']) && $_POST['valor4'] < $valor3)
                $menor = $valor4;
            if(isset($_POST['valor5']) && $_POST['valor5'] < $valor4)
                $menor = $valor5;
            if(isset($_POST['valor6']) && $_POST['valor6'] < $valor5)
                $menor = $valor6;
            if(isset($_POST['valor7']) && $_POST['valor7'] < $valor6)
                $menor = $valor7;
        echo "<h3> menor valor: $menor</h3>";
        }