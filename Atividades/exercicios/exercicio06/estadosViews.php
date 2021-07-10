<!DOCTYPE html>
<html lang="en">

<?php
require_once 'head.php';
?>

<body>

    <table class="table table-light table-striped table-hover table-bordered border-dark table caption-top">

        <thead class="table-dark">
            <tr>
                <th>Estados</th>
            </tr>
        </thead>

        <tbody>

            <?php

            while ($e = $estados->fetch()) {
                echo
                "<tr> 
                    <th>" .
                        $e["nome"] .
                    "</th>
                </tr>\n";
            }

            ?>

        </tbody>
    </table>

</body>

</html>