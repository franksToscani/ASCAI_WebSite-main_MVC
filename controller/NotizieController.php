<?php
require_once 'model/NotiziaModel.php';
require_once 'model/Database.php';

class NotizieController
{
    public function index()
    {
        $model = new NotiziaModel();
        $notizie = $model->getAll();
        include 'view/notizie/index.php';
    }

    public function create()
    {
        if ($_SESSION['ruolo'] !== 'admin') {
            include 'view/auth/accesso_negato.php';
            exit;
        }
        include 'view/notizie/nuova.php';
    }

    public function store()
    {
        if ($_SESSION['ruolo'] !== 'admin') {
            include 'view/auth/accesso_negato.php';
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titolo = $_POST['titolo'] ?? '';
            $contenuto = $_POST['contenuto'] ?? '';
            $success = false;

            if ($titolo && $contenuto) {
                $db = new Database();
                $conn = $db->getConnection();
                $stmt = $conn->prepare("INSERT INTO notizie (titolo, contenuto) VALUES (?, ?)");
                $stmt->bind_param("ss", $titolo, $contenuto);
                $success = $stmt->execute();
                $stmt->close();
            }

            include 'view/notizie/conferma.php';
        }
    }
}
?>
