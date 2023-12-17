<?php

require_once('./models/Client.php');

class clientsController
{
    private $model;
    public $name;
    public $phone;
    public $email;
    public $profession;
    public $celular;
    public $sms;
    public $msgEmail;
    public $birth;
    public $whatsapp;

    function __construct()
    {
        $this->model = new ClientModel();
    }

    function getAll()
    {
        $resultData = $this->model->getAll();

        require_once('./views/index.php');
    }

    function register()
    {
        $this->model->name = $this->name;
        $this->model->email = $this->email;
        $this->model->phone = $this->phone;
        $this->model->msgEmail = $this->msgEmail;
        $this->model->birth = $this->birth;
        $this->model->celular = $this->celular;
        $this->model->sms = $this->sms;
        $this->model->whatsapp = $this->whatsapp;
        $this->model->profession = $this->profession;
        
        $insertData = $this->model->register();
    
        if ($insertData) {
            // Redirecionamento após a inserção bem-sucedida
            header('Location: index.php?action=index');
            exit();
        }
    }
    
}
?>
