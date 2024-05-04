<?php
    require_once "cabecalho.php";
?>
<form action="exer6resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o primeiro valor</label>
            <input type="number" class="form-control" name="numero01"
            if="numero01">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o segundo valor</label>
            <input type="number" class="form-control" name="numero02"
            if="numero02">
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