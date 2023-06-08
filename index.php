<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe-Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <body>
        <!-- FORM -->

        <div class="container mt-5 bg-primary">

            <div class="blu">
                <h1 class="text-center text-light">Strong Password Generator</h1>
                <h2 class="text-center text-dark">Genera una password sicura</h2>

                <form method="GET">
                    <div class="form-group">
                        <label for="length">Lunghezza password:</label>
                        <input placeholder="Inserisci numero da 8 a 20" type="number" class="form-control" name="length" id="length" min="8" max="20" required>
                    </div>
                    <button type="submit" class="btn btn-warning mt-4">Genera password</button>
                </form>
                <!-- FINE FORM -->


                <!-- INIZIO LOGICA PHP -->
                <?php
                include 'functions.php';

                if (isset($_GET['length'])) {
                    $length = $_GET['length'];
                    $password = generatePassword($length);
                    echo '<div class="mt-4">Password generata: <strong>' . $password . '</strong></div>';
                }
                ?>
            </div>
        </div>
    </body>

    </html>