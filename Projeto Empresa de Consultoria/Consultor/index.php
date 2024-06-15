<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Consultores</h3>

    <a href="CadastroConsultor.php" class="btn btn-primary mt-3">Adicionar Consultor</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Especialidade</th>
                <th>Contato</th>
                <th>Tarefa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //Chamo a função retornarProdutos() contida no arquivo funcao.php 
                //para retornar todos os registros da tabela produto
                $linhas = retornarConsultor();
                //Utilizo esse laço para que a variável $l receba a cada passo uma linha da tabela produto
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['especialidade'] ?></td>
                <td><?= $l['contato'] ?></td>
                <td><?= $l['tarefa_id'] ?></td>
                <td>
                    <a href="AlterarCadastroConsultor.php?codigo=<?= $l['codigo'] ?>" class="btn btn-warning"> Alterar </a>
                    <a href="ExcluirCadastroConsultor.php?codigo=<?= $l['codigo'] ?>" class="btn btn-danger"> Excluir </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    

<?php
    require_once("../rodape.php");

    