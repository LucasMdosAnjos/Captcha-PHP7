<?php
$email = $_POST["inputEmail"];
//var_dump($_POST);
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        //VERIFICA CAPTCHA
        $recaptcha_secret = "6LfcYIgUAAAAAAQ0fpxdDdAcyHuZAq9r9GtmC-0k";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        var_dump($response);
        if($response["success"] === true)
        {
            echo "<strong>E-mail Cadastrado com Sucesso!</strong>";
        }
        else
        {
            echo "Você é um Robô, somente é permitido humanos!";
            echo "<meta http-equiv=refresh content='3;URL=example-04.php'>";
        }
    }

?>
