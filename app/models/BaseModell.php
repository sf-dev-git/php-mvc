<?php
class BaseModell
{
    private
        $hostname = 'localhost',
        $username = 'root',
        $password = '',
        $database = 'php-mvc';
    protected $pdo;

    public function __construct(){
        try {
            $this->pdo = new PDO(
                "mysql:dbname={$this->database};host={$this->hostname}",
                $this->username,
                $this->password
            );
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }

    public function table($name) {
        $this->table = $name;
    }

    public function check_table(){
        $stmt = $this->pdo->prepare('SHOW TABLES LIKE :table_name');
        $stmt->execute(['table_name' => $this->table]);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function find($column, $value){
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE $column=".'"'.$value.'"');
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }
}