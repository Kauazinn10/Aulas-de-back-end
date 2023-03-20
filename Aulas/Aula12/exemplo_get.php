O codigo GET serve para varias coisas porem nessa linha de codigo
estamos utilizando ele para somar numeros na URL da pagina

<?php
    $resultado = $_GET['numero1'] + $_GET['numero2'];
    echo "O resultado da soma é $resultado";

?>
