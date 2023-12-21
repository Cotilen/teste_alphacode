<?php

require_once('./models/Contacts.php');

class contactsController
{
    private $model;
    public $id;
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
        $this->model = new ContactsModel();
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
            header('Location: index.php?action=index');
            exit();
        }
    }

    function delete(){
        $this->model->id = $this->id;

        $deleteData = $this->model->delete();

        if($deleteData){
            header('Location: index.php?action=index');
            exit();
        }
    }

    function update()
    {

        $this->model->id = $this->id;
        $this->model->name = $this->name;
        $this->model->email = $this->email;
        $this->model->phone = $this->phone;
        $this->model->msgEmail = $this->msgEmail;
        $this->model->birth = $this->birth;
        $this->model->celular = $this->celular;
        $this->model->sms = $this->sms;
        $this->model->whatsapp = $this->whatsapp;
        $this->model->profession = $this->profession;
        

        $insertData = $this->model->update();
    

        if ($insertData) {
            header('Location: index.php?action=index');
            exit();
        }
    }

    function getOne(){
        $this->model->id = $this->id;
        $resultOneData = $this->model->getOne();

        print_r($resultOneData);
        return $resultOneData;
    } 
}
?>
