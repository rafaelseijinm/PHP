<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        $_SESSION['codigo'] = $codigo;
    } 
    if ($_POST){
        $codigo = $_SESSION['codigo'];
        if(ExcluirConsultor($_SESSION['codigo']))
            header('Location: index.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarConsultorId($codigo);
?>

    <h3>Excluir Cadastro</h3>
    <form action="ExcluirCadastroConsultor.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" disabled
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especialidade" class="form-label">Informe a especialidade</label>
                <input type="text" class="form-control"     name="especialidade" value="<?= $dados['especialidade'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="contato" class="form-label">Informe o contato</label>
                <input type="text" class="form-control" name="contato" 
                    value="<?= $dados['contato'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="categoria" class="form-label"> Selecione a categoria</label>
                <select class="form-select" name="categoria" disabled>
                    <?php
                       $linhas = retornarTarefas();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['id'] == $dados["categoria_id"])
                            echo "<option selected value='{$l['id']}'>{$l['especialidade']}</option>"; 
                        else 
                            echo "<option value='{$l['id']}'>{$l['especialidade']}</option>"; 
                       } 
                    ?>
                </select>
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