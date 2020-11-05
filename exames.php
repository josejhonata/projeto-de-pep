<?php

$sql = 'SELECT * FROM cliente WHERE id = ?'; // $_GET['cliente']

$sql2 = '
    SELECT *
    FROM cli_ex
    JOIN exame ON exame.id = cli_ex.id_exame
    WHERE cliente_id = ?
';

?>