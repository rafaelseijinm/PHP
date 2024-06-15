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
        $dataConclusao = $_POST['dataConclusao'];
        $projeto_id = $_POST['projeto_id'];
        if($nome != "" && $dataConclusao != "" && $projeto_id != ""){
            if(alterarTarefa($nome, $dataConclusao, $projeto_id, $_SESSION['tarefa_id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarTarefaId($tarefa_id);
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
        </div>
        <div class="row">
            <div class="col">
                <label for="projeto_id" class="form-label"> Selecione o projeto</label>
                <select class="form-select" name="projeto_id">
                    <?php
                       $linhas = retornarProjetos();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='{$l['codigo']}'>{$l['codigo']}</option>";
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