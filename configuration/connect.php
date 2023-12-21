<!-- Conexão com o banco de dados -->

<?php

    define('HOST','localhost');
    define('DATABASENAME','db_teste_alphacode');
    define('USER','root');
    define('PASSWORD','');

    class Connect{
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }

        function connectDatabase(){
            try{
                // Define uma interface de conexão segura a um banco de dados
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME,USER,PASSWORD);

                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e)
            {
                echo "ERROR!".$e->getMessage();
                die();
            }
        }
    }
?>