<!-- Consultas/Regras de negócios -->
<?php

require_once('./configuration/connect.php');

class ContactsModel extends Connect
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
        $sqlSelect = $this->connection->query
        (
        "select id, date_format(birth, '%d/%m/%Y') as birth, name, email, phone,
        celular, msgEmail, sms, whatsapp, profession
        from $this->table"
    );

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

    function delete(){
        $sqlDelete = $this->connection->query("delete from $this->table where id = $this->id");

        $resultQuery = $sqlDelete->fetchAll();
    
        return $resultQuery;
    }

    function update(){
        try {
            $sql = "UPDATE $this->table SET
                name = :name,
                email = :email,
                phone = :phone,
                celular = :celular,
                profession = :profession,
                sms = :sms, 
                whatsapp = :whatsapp, 
                msgEmail = :msgEmail, 
                birth = :birth
                WHERE id = :id";
    
            $stmt = $this->connection->prepare($sql);
    
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':phone', $this->phone);
            $stmt->bindParam(':celular', $this->celular);
            $stmt->bindParam(':profession', $this->profession);
            $stmt->bindParam(':sms', $this->sms);
            $stmt->bindParam(':whatsapp', $this->whatsapp);
            $stmt->bindParam(':msgEmail', $this->msgEmail);
            $stmt->bindParam(':birth', $this->birth);
            $stmt->bindParam(':id', $this->id);
    


            $stmt->execute();

            
            return "Atualização realizada com sucesso";
        } catch (PDOException $e) {
            echo "Erro ao atualizar: " . $e->getMessage();
            die();
        }
    }
    
    
    function getOne(){
        $sqlSelect = $this->connection->query("select * from $this->table where id = $this->id ");

        // COnverte o resultado em um Array Associativo
        $resultQuery = $sqlSelect->fetchAll();

        return $resultQuery;
    }

    
}

?>