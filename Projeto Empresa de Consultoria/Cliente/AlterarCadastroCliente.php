<?php
    require_once("../cabecalho.php");
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        session_start();
        $_SESSION['codigo'] = $codigo;
    } else
        $codigo = $_SESSION['codigo'];
    if ($_POST){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        if($nome != "" && $telefone != "" && $email != ""){
            if(AlterarCadastroCliente($nome,$telefone,$email,$_SESSION['codigo']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarClienteId($codigo);
?>

    <h3>Alterar Produto</h3>
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
                <label for="telefone" class="form-label">Informe a telefone</label>
                <input type="text" class="form-control"     name="telefone" value="<?= $dados['telefone'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Informe o email</label>
                <input type="text" class="form-control" name="email" 
                    value="<?= $dados['email'] ?>">
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