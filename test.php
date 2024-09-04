<?php

require_once 'UserValidator.php';

$validator = new UserValidator();

$emails = [
    'test@example.com',
    'invalid.email',
    'user123@domain.co',
    '@missingusername.com',
    'nodomainpart@.com',
];

$passwords = [
    'StrongPass1!',
    'weakpassword',
    'NoSpecialChar1',
    'Short1!',
    'NOLOWERCASE1!',
    'nouppercase1!',
];

echo "Email Validation:\n";
foreach ($emails as $email) {
    echo $email . ': ' . ($validator->validateEmail($email) ? 'Valid' : 'Invalid') . "\n";
}

echo "\nPassword Validation:\n";
foreach ($passwords as $password) {
    echo $password . ': ' . ($validator->validatePassword($password) ? 'Valid' : 'Invalid') . "\n";
}