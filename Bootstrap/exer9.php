<?php
    require_once "cabecalho.php";
?>
<form action="exer9resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="numero" class="form-label">Informe o em que vc nasceu: </label>
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