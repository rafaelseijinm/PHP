<?php
    require_once "cabecalho.php";
?>
<form action="exer7resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="numero" class="form-label">Informe o valor em metros</label>
            <input type="number" class="form-control" name="numero"
            if="numero">
        </div>
    </div>
    <div class="row">   
        <div class="col">
            <button type="submit" class="btn btn-primary">
                Enviar
            </button>
        </div>
    </div>
</form>
<?php
    require_once "rodape.php";