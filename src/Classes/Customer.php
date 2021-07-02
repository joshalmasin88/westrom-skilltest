<?php

namespace Joshua\Test\Classes;

use Joshua\Test\Classes\Database;
use PDO;

class Customer extends Database {

    public function getAll()
    {
        $query = "SELECT * FROM CustomerList";
        return $this->getConnection()->query($query);
    }

    public function create($name,$phone,$email)
    {
        $userInput = [
            $name,
            $phone,
            $email
        ];

        foreach($userInput as $validateInput)
        {
            Validation::cleanData($validateInput);
        }

        try {
            $query = "INSERT INTO CustomerList (name, phone, email) VALUES (:name,:phone,:email)";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            return true;

        } catch(\PDOException $e)
        {
            return $e->getMessage();
        }

    }

    public function getCustomer($id)
    {
        try {
            $query = "SELECT * FROM CustomerList WHERE id = :id ";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return $stmt->fetch();

        } catch(\PDOException $e)
        {
            return $e->getMessage();
        }
    }

    public function search($term)
    {

        Validation::cleanData($term);

        try {
            $query = "SELECT * FROM CustomerList WHERE name LIKE CONCAT(:term, '%')";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(":term", $term);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch(\PDOException $e)
        {
            return $e->getMessage();
        }
    }

    public function deleteCustomer($id)
    {
        try {
            $query = "DELETE FROM CustomerList WHERE id = :id";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(":id", $id);
            return $stmt->execute();
        } catch(\PDOException $e)
        {
            return $e->getMessage();
        }
    }

    public function updateCustomer($name,$phone,$email,$id)
    {
        $userInput = [
            $name,
            $phone,
            $email
        ];

        foreach($userInput as $validateInput)
        {
            Validation::cleanData($validateInput);
        }

        try {
            $query = "UPDATE CustomerList SET name = :name, phone = :phone, email = :email WHERE id = :id ";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return true;
        } catch(\PDOException $e)
        {
            return $e->getMessage();
        }
    }
}
