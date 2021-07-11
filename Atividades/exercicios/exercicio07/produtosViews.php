<!DOCTYPE html>
<html lang="en">

<?php
require_once 'head.php'
?>

<body>

    <a class="btn btn-primary "href="produtosViewsInsert.php">Inserir</a>
    <table class="table table-light table-striped table-hover table-bordered border-dark table caption-top">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Unidade de medida</th>
            </tr>
        </thead>

        <tbody>

            <?php
                while($p = $produtos->fetch()){
                   echo "<tr>
                        <th>".$p["id"]."</th>
                        <th>".$p["nome"]."</th>
                        <th>".$p["um"]."</th>
                    </tr>";
                }


            ?>


        </tbody>
    </table>

</body>

</html>