<?php
$numero = $_POST['num'];
if ($numero > 0) {
    echo "O númnero digitado $numero e é positivo. ";
} elseif ($numero < 0) {
    echo "O número digitado  $numero e é  negativo. ";
} else {
    echo "O número digitado $numero  e é igual a zero. ";
}


