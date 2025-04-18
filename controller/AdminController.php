<?php
require_once 'model/Database.php';

class AdminController {
    public function listaUtenti() {
        session_start();
        if (!isset($_SESSION['ruolo']) || $_SESSION['ruolo'] !== 'admin') {
            include 'view/auth/accesso_negato.php';
            return;
        }

        $db = new Database();
        $conn = $db->getConnection();
        $utenti = $conn->query("SELECT id, username, ruolo FROM utenti ORDER BY id DESC")->fetch_all(MYSQLI_ASSOC);

        include 'view/admin/utenti.php';
    }

    public function eliminaUtente() {
        session_start();
        if (!isset($_SESSION['ruolo']) || $_SESSION['ruolo'] !== 'admin') {
            include 'view/auth/accesso_negato.php';
            return;
        }

        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $db = new Database();
            $conn = $db->getConnection();
            $stmt = $conn->prepare("DELETE FROM utenti WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }

        header("Location: index.php?page=admin_utenti");
        exit;
    }
}
