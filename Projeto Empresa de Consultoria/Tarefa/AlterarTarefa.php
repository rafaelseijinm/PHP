<?php
    require_once("../cabecalho.php");
    if (isset($_GET['tarefa_id'])) {
        $tarefa_id = $_GET['tarefa_id'];
        session_start();
        $_SESSION['tarefa_id'] = $tarefa_id;
    } else
        $tarefa_id = $_SESSION['tarefa_id'];
    if ($_POST){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $categoria = $_POST['categoria'];
        if($nome != "" && $telefone != "" && $email != "" && $categoria != ""){
            if(AlterarCadastroCliente($nome,$telefone,$email,$_SESSION['tarefa_id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarClienteId($id);
?>

    <h3>Alterar Tarefa</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome da Tarefa</label>
                <input type="text" class="form-control" name="nome" 
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dataConclusao" class="form-label">Informe a data de conclusão</label>
                <input type="text" class="form-control"     name="dataConclusao" value="<?= $dados['dataConclusao'] ?>">
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