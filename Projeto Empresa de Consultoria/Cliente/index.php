<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Clientes</h3>

    <a href="CadastroCliente.php" class="btn btn-primary mt-3">Adicionar Cliente</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //Chamo a função retornarProdutos() contida no arquivo funcao.php 
                //para retornar todos os registros da tabela produto
                $linhas = retornarCliente();
                //Utilizo esse laço para que a variável $l receba a cada passo uma linha da tabela produto
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['codigo'] ?></td>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['telefone'] ?></td>
                <td><?= $l['email'] ?></td>
                <td>
                    <a href="AlterarCadastroCliente.php?codigo=<?= $l['codigo'] ?>" class="btn btn-warning"> Alterar </a>
                    <a href="ExcluirCadastroCliente.php?codigo=<?= $l['codigo'] ?>" class="btn btn-danger"> Excluir </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    

<?php
    require_once("../rodape.php");

    