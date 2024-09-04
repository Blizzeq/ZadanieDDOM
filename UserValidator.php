<?php

class UserValidator
{
    public function validateEmail(string $email): bool
    {
        $pattern = '/^[a-zA-Z]+[\w.-]*@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/';
        return (bool) preg_match($pattern, $email);
    }

    public function validatePassword(string $password): bool
    {
        $minLength = 8;
        $hasUppercase = preg_match('/[A-Z]/', $password);
        $hasLowercase = preg_match('/[a-z]/', $password);
        $hasDigit = preg_match('/\d/', $password);
        $hasSpecialChar = preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password);

        return strlen($password) >= $minLength &&
               $hasUppercase &&
               $hasLowercase &&
               $hasDigit &&
               $hasSpecialChar;
    }
}