<?php
    require_once("../cabecalho.php");
?>

    <h3>Cadastrar Cliente</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone</label>
                <input type="text" class="form-control" name="telefone">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Informe o e-mail</label>
                <input type="text" class="form-control" name="email">
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
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        if($nome != "" && $telefone != "" && $email != ""){
            if(CadastroCliente($nome,$telefone,$email))
                echo "Cliente registrado com sucesso!";
            else
                echo "Erro ao cadastrar cliente!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.php");

