<?php
    define('DB_SERVER','localhost');
    define('DB_USER', 'root');
    define('DB_PASS','');
    define('DB_NAME','crud_oop');
    
    class DB_con{
        function __construct(){
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()){
                echo "Failed to connect to Mysql : " . mysqli_connect_error();
            }
        }

        public function insert($idnumber, $firstname, $lastname, $email, $phonenumber, $address){
            $result = mysqli_query($this->dbcon, "INSERT INTO tblusers(idnumber, firstname, lastname, email, 
            phonenumber, address) VALUES('$idnumber', '$firstname', '$lastname', '$email', '$phonenumber', '$address')"); 
            return $result;
        }

        public function fetchdata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers");
            return $result;
        }

        public function fetchonerecord($userid){
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers WHERE id = '$userid'");
            return $result;
        }

        public function update($idnumber, $firstname, $lastname, $email, $phonenumber, $address, $userid){
            $result = mysqli_query($this->dbcon, "UPDATE tblusers SET idnumber = '$idnumber',
                firstname = '$firstname',
                lastname = '$lastname',
                email = '$email',
                phonenumber = '$phonenumber',
                address = '$address'
                WHERE id = '$userid'
            ");
            return $result;
        }

        public function delete($userid){
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tblusers WHERE id = '$userid'");
            return $deleterecord;
        }
    }

?>