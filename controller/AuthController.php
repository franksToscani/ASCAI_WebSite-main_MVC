<?php
session_start();
require_once 'model/UtenteModel.php';
require_once 'model/Database.php';

class AuthController
{
    public function loginForm()
    {
        include 'view/auth/login.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $model = new UtenteModel();
            $utente = $model->trovaPerUsername($username);

            if ($utente && password_verify($password, $utente['password'])) {
                $_SESSION['username'] = $utente['username'];
                $_SESSION['ruolo'] = $utente['ruolo'];
                header('Location: index.php');
                exit;
            } else {
                $errore = "Credenziali errate";
                include 'view/auth/login.php';
            }
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: index.php');
        exit;
    }

    public function registerForm()
    {
        include 'view/auth/register.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $password_confirm = $_POST['password_confirm'] ?? '';
            $error = '';

            if ($username && $password && $password_confirm) {
                if ($password !== $password_confirm) {
                    $error = "Le password non corrispondono.";
                } else {
                    $db = new Database();
                    $conn = $db->getConnection();
                    $model = new UtenteModel();
                    $esiste = $model->trovaPerUsername($username);
                    if ($esiste) {
                        $error = "Username già esistente.";
                    } else {
                        $hash = password_hash($password, PASSWORD_DEFAULT);
                        $stmt = $conn->prepare("INSERT INTO utenti (username, password, ruolo) VALUES (?, ?, 'user')");
                        $stmt->bind_param("ss", $username, $hash);
                        $stmt->execute();
                        header("Location: index.php?page=login_form");
                        exit;
                    }
                }
            } else {
                $error = "Compila tutti i campi.";
            }

            include 'view/auth/register.php';
        }
    }
}
