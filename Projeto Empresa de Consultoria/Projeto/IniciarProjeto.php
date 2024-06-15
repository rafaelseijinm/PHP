<?php
    require_once("../cabecalho.php");
?>

    <h3>Iniciar Projeto</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do Projeto</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe a Descrição do Projeto</label>
                <input type="text" class="form-control" name="descricao">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dataInicio" class="form-label">Informe a data de inicio do Projeto</label>
                <input type="text" class="form-control" name="dataInicio">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success">
                    Salvar
                </button>
            </div>
        </div>
    </form>

<?php
    if ($_POST){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $dataInicio = $_POST['dataInicio'];
        if($nome != "" && $descricao != "" && $dataInicio != ""){
            if(InserirProjeto($nome, $descricao, $dataInicio))
                echo "Projeto Iniciado!";
            else
                echo "Falha ao iniciar Projeto!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.php");

