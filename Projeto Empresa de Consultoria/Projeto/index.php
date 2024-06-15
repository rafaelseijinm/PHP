<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Projetos</h3>

    <a href="IniciarProjeto.php" class="btn btn-primary mt-3">Adicionar Projeto</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Código do Projeto</th>
                <th>Nome do Projeto</th>
                <th>Descrição</th>
                <th>Data de Inicio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //Chamo a função retornarProdutos() contida no arquivo funcao.php 
                //para retornar todos os registros da tabela produto
                $linhas = retornarProjetos();
                //Utilizo esse laço para que a variável $l receba a cada passo uma linha da tabela produto
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['codigo'] ?></td>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['descricao'] ?></td>
                <td><?= $l['dataInicio'] ?></td>
                <td>
                    <a href="AlterarProjeto.php?codigo=<?= $l['codigo'] ?>" class="btn btn-warning"> Alterar </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    

<?php
    require_once("../rodape.php");

    