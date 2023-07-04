<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Password Generator</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>
                    Create a powerfull and secure password
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-circle-info me-2"></i>
                    <div>
                        To use the password generator, please insert the lengh of the string to be generated and select from the options beneath to strenghten the password.
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-align-center">
            <div class="col-12">
                <form action="./functions.php" method="GET">
                    <div class="row m-3">
                        <div class="col-2">
                            <label for="inputPassword6" class="col-form-label">Pasword Length</label>
                        </div>
                        <div class="col-2">
                            <input type="number" name="length" id="passLength" class="form-control">
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-2">
                                <label for="form-check" class="col-form-label">Character repetition.</label>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="charRepetition" value="true" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="charRepetition" value="false">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-2">
                            <label for="form-check" class="col-form-label">Character types.</label>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" name="letters">
                                <label class="form-check-label" for="checkLetters">
                                    Letters
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" name="numbers">
                                <label class="form-check-label" for="checkNumbers">
                                    Numbers
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" name="symbols">
                                <label class="form-check-label" for="checkSymbols">
                                    Symbols
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-3">
                            <input type="submit" value="GENERATE" class="btn btn-primary">
                        </div>
                        <div class="col-3">
                            <input type="reset" value="CANCEL" class="btn btn-secondary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>