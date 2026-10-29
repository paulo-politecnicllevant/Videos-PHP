<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($email, $password)
    {
        if (!Validator::email($email)) {
            $this->errors['email'] = 'Da una dirección de correo válida';
        }

        if (!Validator::string($password)) {
            $this->errors['password'] = 'Da una contraseña válida';
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }
}