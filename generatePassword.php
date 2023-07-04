<?php

    $length = $_GET['length'];
    $charRepetition = isset($_GET['charRepetition']);
    $letters = isset($_GET['letters']);
    $numbers = isset($_GET['numbers']);
    $symbols = isset($_GET['symbols']);

    function createPassword($length, $charRepetition, $letters, $numbers, $symbols) {
    
    $characters = '';
    if ($letters == 'true') {
        $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($numbers == 'true') {
        $characters .= '0123456789';
    }
    if ($symbols == 'true') {
        $characters .= '!@#$%^&*()-_';
    }
    
    $password = '';
    $charactersLength = strlen($characters);
    
    for ($i = 0; $i < $length; $i++) {
        if ($charRepetition == 'true') {
            $password .= $characters[rand(0, $charactersLength - 1)];
        } else {
            $caracter = $characters[rand(0, $charactersLength - 1)];
            
            while (strpos($password, $caracter) !== false) {
                $caracter = $characters[rand(0, $charactersLength - 1)];
            }
            
            $password .= $character;
        }
    }
    return $password;
    }

    $generatedPassword = createPassword($length, $charRepetition, $letters, $numbers, $symbols);
    echo "Generated Password: " . $generatedPassword;
?>
