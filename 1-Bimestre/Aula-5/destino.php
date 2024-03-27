<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Image - HTML & CSS</title>
    <link rel="stylesheet" href="./css/reset.min.css">
    <link rel="stylesheet" href="./css/default.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <header class="header">
            <h1>Praticando PHP-1(Destino)</h1>
        </header>

        <main class="main">
            <div class="credit">


            <?php
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $corbg = filter_input(INPUT_POST, "corbg", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>O nome informado foi: $nome</p>";
    
    echo "<p>O email foi: $email</p>"
    ?>

    <style>
        body{
            background-color: <?php echo $corbg; ?>
        }
        .credit {
    background: rgba(0, 0, 0, 0.75);
    font-size: 1.3em;
    color: whitesmoke;
    padding: 1em;
    border-radius: 0.5em;
}
    </style>


            </div>
        </main>


    </div>

</body>

</html>