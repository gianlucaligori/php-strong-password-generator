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
        <div class="container">
            <h1>Generatore di password</h1>
            <form method="GET">
                <div class="form-group">
                    <label for="length">Lunghezza password:</label>
                    <input type="number" class="form-control" name="length" id="length" min="8" max="20" required>
                </div>
                <button type="submit" class="btn btn-primary">Genera password</button>
            </form>
            <?php
            if (isset($_GET['length'])) {
                $length = $_GET['length'];
                $password = generatePassword($length);
                echo '<div class="mt-4">Password generata: <strong>' . $password . '</strong></div>';
            }

            function generatePassword($length)
            {
                $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
                $password = '';
                $char_length = strlen($characters);

                for ($i = 0; $i < $length; $i++) {
                    $random_index = rand(0, $char_length - 1);
                    $password .= $characters[$random_index];
                }

                return $password;
            }
            ?>
        </div>
    </body>

    </html>