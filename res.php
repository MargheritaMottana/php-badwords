<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>***</title>

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave&display=swap" rel="stylesheet">
</head>

<body class="bg-black">

    <div class="container p-5 text-center text-white">

        <h1 class="mb-4">
            Il tuo risultato
        </h1>

        <hr class="text-white my-5">

        <h3>
            Risultato
        </h3>

        <p class="mb-5 text-secondary">
            La frase scelta: <?php echo $_GET['phrase']; ?>
            <br>
            La parola da censurare scelta: <?php echo $_GET['word']; ?>
        </p>

        <hr class="text-white my-5">

        <a href="index.php" class="btn btn-outline-light">
            Torna alla pagina iniziale
        </a>
    </div>


    <!-- BS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>