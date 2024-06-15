<?php
    require_once("../cabecalho.php");
?>

    <h3>Cadastrar Consultor</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especialidade" class="form-label">Informe a especialidade</label>
                <input type="text" class="form-control" name="especialidade">
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
        $especialidade = $_POST['especialidade'];
        $email = $_POST['email'];
        if($nome != "" && $especialidade != "" && $email != ""){
            if(CadastroConsultor($nome,$especialidade,$email))
                echo "Consultor registrado com sucesso!";
            else
                echo "Erro ao cadastrar consultor!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.php");

