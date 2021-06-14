<?php

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$number = $_POST['user_num'];
$subject = $_POST['user_subject'];
$message = $_POST['user_message'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    
    echo ("<p> Merci {$name} de nous avoir contacté à propos de '{$subject}'. </p>
    <p> Un de nos conseiller vous contactera </p> soit à l’adresse {$email}
    <p> ou par téléphone au: {$number} dans les plus brefs délais pour traiter votre demande :
    
    <p> {$message} </p>");
    
}else{
    echo ("L'adresse email '$email' est considérée comme invalide.");
    
}

?>

<button>
    <a href='./_form.php'> Retour au formulaire </a>
</button>