<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
    <style>
        header{
            color: blue;
        }
        main{
            color: black;
        }
    </style>
</head>
<body>
    <header>
    <h1>Exercício 07</h1>
    <h3>Crie um programa em PHP que receba os seguintes dados de 10 alunos: nome, nota1 e nota2. 
        Armazene esses dados em um mapa ordenado que contenha também o armazenamento da média de nota do aluno.
        Seu programa deve imprimir a lista dos aprovados com as médias finais e outra lista dos reprovados sem exibir o valor da média.</h3>
    
    </header>
    <main>
    <?php 
    
    if(isset($_POST['nome']) && isset($_POST['nota1']) && isset($_POST['nota2'])){
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $medias = array();

        for($i=0; $i<10; $i++){
            $media = ($nota1[$i] + $nota2[$i]) / 2;
            $medias[$nome[$i]] = $media;
        }

        $aprov = array();
        $reprov = array();

        foreach($medias as $nom => $m){
            if($m >= 6){
                $aprov[$nom] = $m;
            }
            else{
                $reprov[] = $nom;
            }
        }

        echo "<h3>Aprovados:</h3>";
        echo "<ul>";
        foreach($aprov as $nom => $not){
            echo "<h3><li>$nom - $not</li></h3>";
        }
        echo "</ul>";
        echo "<h3>Reprovados:</h3>";
        echo "<ul>";
        foreach($reprov as $nom){
            echo "<h3><li>$nom</li></h3>";
        }
        echo "</ul>";
        

    }
    
    
    ?>

    </main>
</body>
</html>