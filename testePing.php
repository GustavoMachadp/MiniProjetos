<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teste ping</title>
</head>

<body>

    <?php
    if (isset($_POST['submit'])) {
        $host = ($_POST['target']);
        exec("ping -n 1 -w 1 " . $host, $output, $result);

        if ($result == 0) { ?>

            <script type="text/javascript">
                alert("Ip Funcionando!");
            </script>

        <?php } else { ?>

            <script type="text/javascript">
                alert("Ip Fora!");
            </script>

    <?php

        }
    }
    ?>
    <div class="container">
        <h1>Teste de ping</h1>
        <form method="post">
            Digite o endereço do alvo: <input type="text" name="target">
            <input type="submit" name="submit" value="Ping">
        </form>
    </div>

</body>

</html>