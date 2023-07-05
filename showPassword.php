<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator - Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1>Password Generator</h1>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col-12">
                <h4>
                    Create a powerfull and secure password
                </h4>
            </div>
        </div>
        <?php if (isset($_SESSION['generatedPassword']) && $_SESSION['generatedPassword'] !== '') {
            $generatedPassword = $_SESSION['generatedPassword']; ?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading display-4">Success!</h4>
                    <p class="display-3 text-center"><?php echo $generatedPassword; ?></p>
                    <hr>
                    <div class="text-center my-3">
                        <img src="http://api.qrserver.com/v1/create-qr-code/?data=<?php echo $generatedPassword;?>!&size=100x100&color=0f5132&bgcolor=d1e7dd" alt="Password QR code" >
                    </div>
                    <p class="mb-0 text-center">We have created the password with the parameters you have selected.</p>
            </div>
            <?php  unset($_SESSION['generatedPassword']);
                } else { ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading display-4">Error!</h4>
                    <p class="text-center display-3">No password has been generated</p>
                    <hr>
                    <p class="mb-0 text-center">We couldn't create any password with the parameters you have selected.</p>
            </div>
            <?php } ?>
    </div>
</body>
</html>