<?php


class Database{
    private $conn;

    static private function get_conn(){
        $server_name = "";
        $username  = "";
        $password = "";
        $data_base_name = "";
        $conn = new mysqli($server_name,$username,$password,$data_base_name);
        if($conn->connect_error){
            print("Connction is filed".$conn->connect_error);
            return $conn;
        }
        else
        {
            return $conn;
        }
    }

    public function set_connection(){
            $this->conn = Database::get_conn();
    }
    
    public function __get_connection(){
        return $this->set_connection();
    }


}
