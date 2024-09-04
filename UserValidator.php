<?php

class UserValidator
{
    public function validateEmail(string $email): bool
    {
        $pattern = '/^[a-zA-Z]+[\w.-]*@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/';
        return (bool) preg_match($pattern, $email);
    }
}