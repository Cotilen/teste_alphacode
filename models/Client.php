<!-- Consultas/Regras de negócios -->
<?php

require_once('./configuration/connect.php');

class ClientModel extends Connect
{
    private $table;
    public $id;
    public $name;
    public $email;
    public $phone;
    public $celular;
    public $birth;
    public $msgEmail;
    public $sms;
    public $whatsapp;
    public $profession;

    function __construct()
    {
        parent::__construct();
        $this->table = 'tbl_contacts';
    }

    function getAll()
    {
        $sqlSelect = $this->connection->query("select * from $this->table");

        // COnverte o resultado em um Array Associativo
        $resultQuery = $sqlSelect->fetchAll();

        return $resultQuery;
    }

    function register()
    {

            $sqlInsert = $this->connection->query("insert into $this->table(
                name, email, phone,celular, profession, sms, whatsapp, msgEmail,birth
                )values('$this->name',
                '$this->email',
                '$this->phone',
                '$this->celular',
                '$this->profession',
                $this->sms, 
                $this->whatsapp, 
                $this->msgEmail, 
                '$this->birth'
                );");
    
            $resultQuery = $sqlInsert->fetchAll();
    
            return $resultQuery;


    }
}

?>