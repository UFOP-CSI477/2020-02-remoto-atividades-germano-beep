<!DOCTYPE html>
<html lang="en">

<?php
require_once 'head.php';
?>

<body>

    <form action="produtosControllerInsert.php" method="post">

        <div class="form-floating">
            <input class="form-control" type="text" name="nome" id="nome" placeholder="nome">
            <label class="floatingInput" for="nome">Nome do produto: </label>

        </div>


        <div class="form-floating">
            <input class="form-control" type="text" name="um" id="um" placeholder="um">
            <label class="floatingInput" for="um">Unidade de medida do produto: </label>

        </div>

        <input class="btn btn-success" type="submit" value="Inserir">
        <input class="btn btn-danger" type="reset" value="Limpar">
       

    </form>
</body>

</html>