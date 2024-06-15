<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Tarefas</h3>

    <a href="IniciarTarefa.php" class="btn btn-primary mt-3">Adicionar Tarefa</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome da Tarefa</th>
                <th>Data de Conclusão</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //Chamo a função retornarProdutos() contida no arquivo funcao.php 
                //para retornar todos os registros da tabela produto
                $linhas = retornarTarefas();
                //Utilizo esse laço para que a variável $l receba a cada passo uma linha da tabela produto
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['dataConclusao'] ?></td>
                <td><?= $l['codigo'] ?></td>
                <td>
                    <a href="AlterarTarefa.php?codigo=<?= $l['codigo'] ?>" class="btn btn-warning"> Alterar </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    

<?php
    require_once("../rodape.php");

    