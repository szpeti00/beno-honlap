<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // reCaptcha
    // $captcha = $_POST['g-recaptcha-response'];
    // if(!$captcha){
    //   echo 'Please check the the captcha form.';
    //   exit;
    // }
    // $secretKey = "";
    // $ip = $_SERVER['REMOTE_ADDR'];
    // $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    // $responseKeys = json_decode($response,true);
    // if(intval($responseKeys["success"]) !== 1) {
    //   echo 'You failed the CAPTCHA. Are you a robot?';
    //   exit;
    // }

    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Hoppla! Ein Fehler ist aufgetreten. Bitte füllen Sie das Formular aus und versuchen Sie es erneut.";
        exit;
    }

    $recipient = "benedek.varga@drvb.hu";
    $subject = "New contact from $name";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Vielen Dank für Ihre ehrenvolle Anfrage. Unsere Mitarbeiter werden innerhalb von 1-3 Tagen Kontakt mit Ihnen aufnehmen.";
    } else {
        http_response_code(500);
        echo "Hoppla! Ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.";
    }
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "Hoppla! Ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.";
}
?>
