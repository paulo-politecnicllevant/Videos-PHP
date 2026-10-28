<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Da una dirección de correo válida';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Da una contraseña válida';
}

if(!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if($user){
    if(password_verify($password, $user['password'])){
        login([
            'email' => $email
        ]);

        header("Location: /");
        exit();
    }
}

return view('session/create.view.php', [
    'errors' => [
        'email' => "No matching account for that email address and password"
    ]
]);