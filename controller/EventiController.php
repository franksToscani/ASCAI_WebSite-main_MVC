<?php
require_once 'model/EventiModel.php';
require_once 'model/Database.php';

class EventiController
{
    public function index()
    {
        $model = new EventiModel();
        $eventi = $model->getAll();
        include 'view/eventi/index.php';
    }

    public function dettaglio($id)
    {
        $model = new EventiModel();
        $evento = $model->getById($id);
        include 'view/eventi/dettaglio.php';
    }

    public function iscriviti()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nome = $_POST['nome'] ?? '';
            $email = $_POST['email'] ?? '';
            $evento_id = $_POST['evento_id'] ?? '';

            if ($nome && $email && $evento_id) {
                $db = new Database();
                $conn = $db->getConnection();
                $stmt = $conn->prepare("INSERT INTO iscrizioni (nome, email, evento_id) VALUES (?, ?, ?)");
                $stmt->bind_param("ssi", $nome, $email, $evento_id);
                $success = $stmt->execute();
                $stmt->close();
            }
            include 'view/eventi/conferma.php';
        }
    }
}
?>
