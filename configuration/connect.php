<!-- Conexão com o banco de dados -->

<?php

    define('HOST','db-alphacode.c7ks8ago4e4g.us-east-1.rds.amazonaws.com');
    define('DATABASENAME','db_teste_alphacode');
    define('USER','root');
    define('PASSWORD','Alphacode');

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