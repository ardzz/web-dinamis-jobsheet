<?php
    class database{
        var string $host = "localhost";
        var string $username = "root";
        var string $password = "";
        var string $database = "sewa_buku";
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

        protected function asocToArray(mysqli_result $data): array
        {
            $result = [];
            while ($row = $data->fetch_assoc()){
                $result[] = $row;
            }
            return $result;
        }
    }
