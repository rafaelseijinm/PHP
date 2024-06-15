<?php

    //Função para conexão com o banco de dados
    function conectarBanco(){
        //Instancio o meu objeto PDO que fornece as funções para manipulação dos dados
        $conexao = new PDO("mysql:host=localhost; dbname=bdProjetoConsultoria", "root", "");
        return $conexao;
    }

    /*Existe uma relação da tabela categoria com a tabela produto. Portanto, preciso buscar todas as
    categorias do banco de dados para poder relacionar com os registros de produtos na minha aplicação
    A função abaixo faz essa busca e retorna todos os registros de categorias*/
    function retornarTarefas(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM Tarefa";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
    function retornarProjetos(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM Projeto";
                    
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    /*Para poder alterar ou excluir os produtos, preciso consultar todos os registros do banco de dados
    Utilizo o INNER JOIN para buscar no banco também os dados da categoria, para poder mostrar o nome da categoria 
    para o usuário, não apenas o seu código*/
    function retornarCliente(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM Cliente";
                    
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
    function retornarConsultor(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM Consultor";
                    
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Função que realiza a inserção de um produto
    function cadastroCliente($nome, $telefone, $email){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO cliente (nome, telefone, email)VALUES (:nome, :telefone, :email)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":email", $email);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function cadastroConsultor($nome, $especialidade, $contato, $tarefa_id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO consultor (nome, especialidade, contato, tarefa_id)VALUES (:nome, :especialidade, :contato, :tarefa_id)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":especialidade", $especialidade);
            $stmt->bindValue(":contato", $contato);
            $stmt->bindValue(":tarefa_id", $tarefa_id);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function InserirProjeto($nome, $descricao, $dataInicio){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO Projeto (nome, descricao, dataInicio)VALUES (:nome, :descricao, :dataInicio)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":dataInicio", $dataInicio);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function InserirTarefa($nome, $dataConclusao, $projeto_id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO Tarefa (nome, dataConclusao, projeto_id)VALUES (:nome, :dataConclusao, :projeto_id)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":dataConclusao", $dataConclusao);
            $stmt->bindValue(":projeto_id", $projeto_id);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Para poder alterar ou excluir um registro, precisamos consultar o registro pela sua chave primária (id)
    function consultarClienteId($id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM cliente WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $id);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function consultarConsultorId($id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM consultor WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $id);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
    function consultarProjetoId($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM Projeto WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
    function consultarTarefaId($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM Tarefa WHERE tarefa_id = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
    //Função que realiza a alteração de um produto
    function alterarCadastroCliente($nome, $telefone, $email, $id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE cliente SET nome = :nome, telefone = :telefone, email = :email WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":codigo", $id);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function alterarCadastroConsultor($nome, $contato, $especialidade, $tarefa, $id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE consultor SET nome = :nome, contato = :contato, especialidade = :especialidade, categoria_id = :tarefa WHERE id = :id";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":contato", $contato);
            $stmt->bindValue(":especialidade", $especialidade);
            $stmt->bindValue(":tarefa", $tarefa);
            $stmt->bindValue(":id", $id);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
    function alterarProjeto($nome, $descricao, $dataInicio, $codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE Projeto SET nome = :nome, descricao = :descricao, dataInicio = :dataInicio WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":dataInicio", $dataInicio);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function alterarTarefa($nome, $dataConclusao, $projeto_id, $tarefa_id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE Tarefa SET nome = :nome, dataConclusao = :dataConclusao, projeto_id = :projeto_id WHERE tarefa_id = :tarefa_id";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":dataConclusao", $dataConclusao);
            $stmt->bindValue(":projeto_id", $projeto_id);
            $stmt->bindValue(":tarefa_id", $tarefa_id);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Função que realiza a exclusão de um produto
    function excluirCliente($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "DELETE FROM cliente WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function excluirConsultor($codigo){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "DELETE FROM consultor WHERE codigo = :codigo";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":codigo", $codigo);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }






