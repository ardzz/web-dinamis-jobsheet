<?php
include "Model.php";
    class database{
        protected string $host = "localhost";
        protected string $username = "root";
        protected string $password = "";
        protected string $database = "sewa_buku";
        static mysqli $connection;
        function __construct(){
            self::$connection = new \mysqli(
                $this->host,
                $this->username,
                $this->password,
                $this->database
            );
        }

        static function getConnection(): mysqli
        {
            return self::$connection;
        }

        public static function connect()
        {
            new self();
        }

        static function executeQuery(string $query): mysqli_result|bool
        {
            return self::getConnection()
                ->query($query);
        }

        protected function asocToArray(mysqli_result $data): array
        {
            $result = [];
            while ($row = $data->fetch_assoc()){
                $result[] = $row;
            }
            return $result;
        }
    }
