<?php
require_once 'model/Database.php';
class IscrizioneModel {
    private $conn;
    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }
    public function getAll() {
        $result = $this->conn->query("SELECT * FROM iscrizioni ORDER BY id DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>