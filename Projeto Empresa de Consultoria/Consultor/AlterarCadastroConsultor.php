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
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $tarefa_id = $_POST['tarefa_id'];
        if($nome != "" && $telefone != "" && $email != "" && $tarefa_id != ""){
            if(AlterarCadastroConsultor($nome,$telefone,$email,$tarefa_id,$_SESSION['tarefa_']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarClienteId($id);
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
                <label for="tarefa" class="form-label"> Informe a tarefa</label>
                <select class="form-select" name="tarefa">
                    <?php
                       $linhas = retornarTarefas();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['tarefa_id'] == $dados["tarefa_id"])
                            echo "<option selected value='{$l['tarefa_id']}'>{$l['telefone']}</option>"; 
                        else 
                            echo "<option value='{$l['tarefa_id']}'>{$l['telefone']}</option>"; 
                       } 
                    ?>
                </select>
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