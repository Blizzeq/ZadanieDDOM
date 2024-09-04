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