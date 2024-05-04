<?php
    require_once "cabecalho.php";
?>
<form action="exer5resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o valor</label>
            <input type="number" class="form-control" name="valor"
            if="valor">
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