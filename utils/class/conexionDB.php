<?php

require __DIR__ . '/../../lib/variables_env/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

class conectionDB {
    protected $conn;

    private $server;
    private $database;
    private $user;
    private $password;

    public function __construct()
    {
        $this->server = $_ENV['SERVER'];
        $this->database = $_ENV['DATABASE'];
        $this->user = $_ENV['USERNAME'];
        $this->password = $_ENV['PASSWORD'];
        $this->conectar();
    }

    public function conectar() {
        $dsn = "sqlsrv:server=".$this->server.";database=".$this->database."";
        try {
            $this->conn = new PDO($dsn, $this->user, $this->user);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC
        );
        } catch (PDOException $e) {
            echo "error al conectar: ". $e->getMessage();
        }
    }
} 
?>