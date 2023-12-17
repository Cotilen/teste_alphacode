<!-- Rotas / Chamadas de métodos -->
<?php
error_reporting(E_ALL);
require_once('./controllers/clientsController.php');

$controller = new clientsController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $controller->getAll();
        break;
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset(
                $_POST["name"],
                $_POST["email"],
                $_POST["phone"],
                $_POST["celular"],
                $_POST["sms"],
                $_POST["msgEmail"],
                $_POST["profession"],
                $_POST["birth"],
                $_POST["whatsapp"]
            )) {
                $requiredFields = ['name', 'email', 'phone', 'celular', 'profession', 'birth'];
                $isEmpty = false;
        
                foreach ($requiredFields as $field) {
                    if (empty($_POST[$field])) {
                        $isEmpty = true;
                        break;
                    }
                }
        
                if (!$isEmpty) {
                    $controller->name = $_POST["name"];
                    $controller->email = $_POST["email"];
                    $controller->phone = $_POST["phone"];
                    $controller->whatsapp = $_POST["whatsapp"];
                    $controller->celular = $_POST["celular"];
                    $controller->birth = $_POST["birth"];
                    $controller->sms = $_POST["sms"];
                    $controller->msgEmail = $_POST["msgEmail"];
                    $controller->profession = $_POST["profession"];
        
                    $controller->register();
                    
                    header("Location: index.php?action=index");
                    exit();
                }else{
                    header("Location: index.php?action=index");
                    exit();
                }
            }else{
                header("Location: index.php?action=index");
                exit();
            }
        }
        break;
}

?>