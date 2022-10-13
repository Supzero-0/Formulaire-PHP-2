<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$eMail = $_POST['eMail'];
$phoneNumber = $_POST['phoneNumber'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$data = array_map('trim', $_POST);
$errors = [];

if (!isset($data['firstName']) || empty($data['firstName'])) {
    $errors[] = "Le prénom est obligatoire";
}

if (!isset($data['lastName']) || empty($data['lastName'])) {
    $errors[] = "Le nom est obligatoire";
}

if (!isset($data['eMail']) || empty($data['eMail'])) {
    $errors[] = "L'email est obligatoire";
}

if (!filter_var($data['eMail'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'email n'est pas formaté correctement";
}

if (!isset($data['phoneNumber']) || empty($data['phoneNumber'])) {
    $errors[] = "Le téléphone est obligatoire";
}

if (!isset($data['subject']) || empty($data['subject'])) {
    $errors[] = "Le sujet est obligatoire";
}

if (!isset($data['message']) || empty($data['message'])) {
    $errors[] = "Le message est obligatoire";
}

if (empty($errors)) {
    echo '<br>';
    echo 'Merci ' . $firstName . ' ' . $lastName . ' de nous avoir contacté à propos de ' . $subject;
    echo '</br>';
    echo '<br>';
    echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $eMail . ' ou par téléphone au ' . $phoneNumber . ' dans les plus brefs délais pour traiter votre demande ! ';
    echo '</br>';
} else {
    echo "Il y a des erreurs";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}
