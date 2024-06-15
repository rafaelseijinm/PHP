<?php
    require_once("../cabecalho.php");
?>

    <h3>Iniciar Tarefa</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome da Tarefa</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dataConclusao" class="form-label">Informe a data da conclusão</label>
                <input type="text" class="form-control" name="dataConclusao">
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
    if ($_POST){
        $nome = $_POST['nome'];
        $dataConclusao = $_POST['dataConclusao'];
        $projeto_id = $_POST['projeto_id'];
        if($nome != "" && $dataConclusao != "" && $projeto_id != ""){
            if(InserirTarefa($nome,$dataConclusao,$projeto_id))
                echo "Tarefa Iniciada!";
            else
                echo "Falha ao iniciar Tarefa!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.php");

