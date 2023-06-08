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
        <div class="container mt-5">
            <h1>Generatore di password</h1>
            <form>
                <div class="form-group">
                    <label for="length">Lunghezza password:</label>
                    <input type="number" class="form-control" id="length" min="6" max="20" required>
                </div>
                <div class="form-group">
                    <label for="uppercase">Includi lettere maiuscole:</label>
                    <input type="checkbox" class="form-check-input" id="uppercase">
                </div>
                <div class="form-group">
                    <label for="numbers">Includi numeri:</label>
                    <input type="checkbox" class="form-check-input" id="numbers">
                </div>
                <div class="form-group">
                    <label for="symbols">Includi simboli:</label>
                    <input type="checkbox" class="form-check-input" id="symbols">
                </div>
                <button type="submit" class="btn btn-primary">Genera password</button>
            </form>
            <div id="password"></div>
        </div>
    </body>

    </html>

</body>

</html>