<?php 
    require_once "cabecalho.php";
?>
        <form action="resposta.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="valor1" class="form-label">Informe o valor 1: </label>
                    <input type="text" name="valor1" id="valor1" class="form-control">
                </div>
                <div class="col">
                    <label for="valor2" class="form-label">Informe o valor 2</label>
                    <input type="text" name="valor2" id="valor2" class="form-control">
                </div>
            </div>
            <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-outline-danger">Enviar</button>
            </div>
        </div>
        </form>
<?php
    require_once "rodape.php";