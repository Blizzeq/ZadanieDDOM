# Walidator Użytkownika

Prosta aplikacja PHP do walidacji adresów e-mail i haseł.

## Opis

Ta aplikacja zawiera klasę `UserValidator`, która oferuje dwie główne funkcje:
1. Walidacja adresów e-mail
2. Walidacja haseł

Aplikacja demonstruje użycie tych funkcji na przykładowych danych.

## Wymagania

- PHP 7.0 lub nowszy

## Struktura projektu

- `UserValidator.php`: Klasa zawierająca logikę walidacji
- `test.php`: Skrypt testowy demonstrujący użycie walidatora

## Jak używać

1. Sklonuj repozytorium lub pobierz pliki.
2. Uruchom skrypt testowy:
php test.php

## Funkcje

### Walidacja e-mail

Sprawdza, czy podany ciąg znaków jest poprawnym adresem e-mail.

Kryteria:
- Musi zawierać znak @
- Nazwa użytkownika musi zaczynać się od litery
- Dozwolone znaki w nazwie użytkownika: litery, cyfry, kropki, myślniki i podkreślenia
- Domena musi zawierać co najmniej jedną kropkę
- Końcówka domeny musi mieć co najmniej 2 znaki

### Walidacja hasła

Sprawdza, czy podane hasło spełnia kryteria bezpieczeństwa.

Kryteria:
- Minimum 8 znaków
- Przynajmniej jedna wielka litera
- Przynajmniej jedna mała litera
- Przynajmniej jedna cyfra
- Przynajmniej jeden znak specjalny