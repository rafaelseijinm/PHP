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
                <label for="contato" class="form-label">Informe o contato</label>
                <input type="text" class="form-control" name="contato">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="tarefa_id" class="form-label"> Selecione a tarefa</label>
                <select class="form-select" name="tarefa_id">
                    <?php
                       $linhas = retornarTarefas();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='{$l['tarefa_id']}'>{$l['tarefa_id']}</option>";
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
    if ($_POST){
        $nome = $_POST['nome'];
        $especialidade = $_POST['especialidade'];
        $contato = $_POST['contato'];
        $tarefa_id = $_POST['tarefa_id'];
        if($nome != "" && $especialidade != "" && $contato != "" && $tarefa_id != ""){
            if(CadastroConsultor($nome,$especialidade,$contato, $tarefa_id))
                echo "Consultor registrado com sucesso!";
            else
                echo "Erro ao cadastrar consultor!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.php");

