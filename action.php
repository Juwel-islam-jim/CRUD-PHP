<?php 
     
     class Database
     {
          private $dns = "mysql:host=localhost;dbname=object";
          private $user = "root";
          private $pass = "";
          public $conn;
 
          public function __construct()
          {
              try
              {
                  $this->conn = new PDO($this->dns,$this->user,$this->pass);
              }
              catch(PDOException $e)
              {
                  echo $e->getMessage();
              }
          }
 
          public function insert($fname, $lname, $email, $phone)
          {
            $sql = "INSERT INTO users (first_name, last_name, email, phone) VALUES (:fname, :lname, :email, :phone)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['fname'=>$fname, 'lname'=>$lname, 'email'=>$email, 'phone'=>$phone]);
 
            return true;
 
          }
 
          public function read()
          {
            $data = array();
            $sql = "SELECT * FROM users";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->Fetchall(PDO::FETCH_ASSOC);
            foreach ($result as $row)
            {
                  $data[] = $row;
 
            }
             return $data;
            
          }
 
          public function getUserById($id)
          {
              $sql = "SELECT * FROM users WHERE id = :id ";
              $stmt = $this->conn->prepare($sql);
              $stmt->execute(['id'=>$id]);
              $result = $stmt->Fetch(PDP::FETCH_ASSOC);
              return $result;
 
          }
 
          public function update($id, $fname, $lname, $email, $phone)
          {
            $sql = "UPDATE users SET first_name = :fname, last_name = :lname, email = :email, phone = :phone WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['fname'=>$fname, 'lname'=>$lname, 'email'=>$email, 'phone'=>$phone, 'id'=>$id]);
            return true;
          }
 
          public function delete($id)
          {
              $sql = "DELETE FROM users WHERE id = :id";
              $stmt = $this->conn->prepare($sql);
              $stmt->execute(['id'=>$id]);
              return true;
          }
 
          public function totalRowCount()
          {
              $sql = "SELECT * FROM users";
              $stmt = $this->conn->prepare($sql);
              $stmt->execute();
              $t_row = $stmt->rowCount();
              return $t_row;
          }
 
      }
 
 
      $ob = new Database();
      echo $ob->totalRowCount();
       
 ?>