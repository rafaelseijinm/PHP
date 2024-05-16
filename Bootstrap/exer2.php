<?php
    require_once "cabecalho.php";
?>
<form action="exer2resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o valor 1</label>
            <input type="number" class="form-control" name="valor1"
            if="valor">
        </div>
        <div class="col">
            <label for="valor" class="form-label">Informe o valor 2</label>
            <input type="number" class="form-control" name="valor2"
            if="valor">
        </div>
        <div class="col">
            <label for="valor" class="form-label">Informe o valor 3</label>
            <input type="number" class="form-control" name="valor3"
            if="valor">
        </div>
        <div class="col">
            <label for="valor" class="form-label">Informe o valor 4</label>
            <input type="number" class="form-control" name="valor4"
            if="valor">
        </div>
        <div class="col">
            <label for="valor" class="form-label">Informe o valor 5</label>
            <input type="number" class="form-control" name="valor5"
            if="valor">
        </div>
        <div class="col">
            <label for="valor" class="form-label">Informe o valor 6</label>
            <input type="number" class="form-control" name="valor6"
            if="valor">
        </div>
        <div class="col">
            <label for="valor" class="form-label">Informe o valor 7</label>
            <input type="number" class="form-control" name="valor7"
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