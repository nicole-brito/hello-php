<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP!</title>
</head>
<body>
    <h1>
    <?php
        echo "Olá, Mundo!";
    ?>
    </h1>
    <p>
        <?php 
            echo "PHP pqp é muito feio :)" . "<br>";
            echo "Hoje é " . date("d/m/Y") . "<br>";
            echo "Agora são " . date("H:i:s") . "<br>";

            phpinfo(); // Mostra todas as informações do PHP, incluindo módulos instalados e variáveis de ambiente
            // phpinfo(INFO_MODULES); // Mostra apenas os módulos instalados
        ?>
    </p>
</body>
</html>