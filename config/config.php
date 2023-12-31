<?php

    class Config {

        private $a = 10;
        private $b = 5;
        private $host = "127.0.0.1";
        private $username = "root";
        private $password = "";
        private $db_name = "dev";
        private $table_name = "php_dev";
        private $user_table = "users";
        
        private $conn;

        public function sum() {
            $sum = $this->a + $this->b;

            echo "Sum: " . $sum;
        }

        public function connect() {

            $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
            
            if($this->conn) {
                // echo "Connected !!";
            }
            else {
                echo "Not connected !!";
            }

        }

        public function insert($name,$age,$course) {

            $query = "INSERT INTO $this->table_name(name,age,course) VALUES('$name',$age,'$course')";

            $res = mysqli_query($this->conn,$query); 

            return $res;
        }

        public function getAllRecords() {

            $query = "SELECT * FROM $this->table_name";

            return mysqli_query($this->conn,$query);  

        }

        public function delete($id) {

            $query = "DELETE FROM $this->table_name WHERE id=$id";

            return mysqli_query($this->conn,$query);

        }

        public function fetch_single_record($id) {

            $query = "SELECT * FROM $this->table_name WHERE id=$id";

            return mysqli_query($this->conn,$query);

        }

    }   
     
?>