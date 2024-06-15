<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        $_SESSION['codigo'] = $codigo;
    } 
    if ($_POST){
        $codigo = $_SESSION['codigo'];
        if(ExcluirCliente($_SESSION['codigo']))
            header('Location: index.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarClienteId($codigo);
?>

    <h3>Excluir Cliente</h3>
    <form action="ExcluirCadastroCliente.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" disabled
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">Informe a telefone</label>
                <input type="text" class="form-control"     name="telefone" value="<?= $dados['telefone'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Informe o email</label>
                <input type="text" class="form-control" name="email" 
                    value="<?= $dados['email'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir">
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.php");