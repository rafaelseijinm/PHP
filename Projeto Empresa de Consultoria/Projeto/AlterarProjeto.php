<?php
    require_once("../cabecalho.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    if ($_POST){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $dataInicio = $_POST['dataInicio'];
        $categoria = $_POST['categoria'];
        if($nome != "" && $descricao != "" && $dataInicio != "" && $categoria != ""){
            if(AlterarProjeto($nome,$descricao,$dataInicio,$_SESSION['codigo']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarClienteId($id);
?>

    <h3>Alterar Projeto</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" 
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe a descricao</label>
                <input type="text" class="form-control"     name="descricao" value="<?= $dados['descricao'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dataInicio" class="form-label">Informe o dataInicio</label>
                <input type="text" class="form-control" name="dataInicio" 
                    value="<?= $dados['dataInicio'] ?>">
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
    require_once("../rodape.php");