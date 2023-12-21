<!-- Rotas / Chamadas de métodos -->
<?php
error_reporting(E_ALL);
require_once('./controllers/contactsController.php');

$controller = new contactsController();

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
                $_POST["profession"],
                $_POST["birth"],
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
                    $controller->whatsapp = isset($_POST["whatsapp"]) ? $_POST["whatsapp"] : 0;
                    $controller->celular = $_POST["celular"];
                    $controller->birth = $_POST["birth"];
                    $controller->sms = isset($_POST["sms"]) ? $_POST["sms"] : 0;
                    $controller->msgEmail = isset($_POST["msgEmail"]) ? $_POST["msgEmail"] : 0;
                    $controller->profession = $_POST["profession"];

                    $controller->register();
                    print_r($controller);

                    header("Location: index.php?action=index");
                    exit();
                } else {
                    header("Location: index.php?action=index");
                    exit();
                }
            } else {
                header("Location: index.php?action=index");
                exit();
            }
        }
        break;
    case 'delete':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_GET['id'];

            $controller->id = $id;
            $controller->delete();

            header("Location: index.php?action=index");
            exit();
        } else {
            header("Location: index.php?action=index");
        }
        break;
    case 'update':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset(
                $_POST["name"],
                $_POST["email"],
                $_POST["phone"],
                $_POST["celular"],
                $_POST["profession"],
                $_POST["birth"],
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

                    $controller->id = $_POST["id"];
                    $controller->name = $_POST["name"];
                    $controller->email = $_POST["email"];
                    $controller->phone = $_POST["phone"];
                    $controller->whatsapp = isset($_POST["whatsapp"]) ? $_POST["whatsapp"] : 0;
                    $controller->celular = $_POST["celular"];
                    $controller->birth = $_POST["birth"];
                    $controller->sms = isset($_POST["sms"]) ? $_POST["sms"] : 0;
                    $controller->msgEmail = isset($_POST["msgEmail"]) ? $_POST["msgEmail"] : 0;
                    $controller->profession = $_POST["profession"];


                    $controller->update();

                    header("Location: index.php?action=index");
                    exit();
                } else {
                    header("Location: index.php?action=index");
                    exit();
                }
            } else {
                header("Location: index.php?action=index");
                exit();
            }
        }
        break;
}

?>