<?php

namespace Joshua\Test\Classes;

class CustomerNote extends Database {

    public function createNote($CustomerID,$note)
    {
        Validation::cleanData($note);

        try {
            $query = "INSERT INTO CustomerNotes (note, CustomerID) VALUES (:note, :CustomerID)";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(":note", $note);
            $stmt->bindParam(":CustomerID", $CustomerID);
            return $stmt->execute();
        } catch(\PDOException $e)
        {
            return $e->getMessage();
        }


    }

    public function getuserNotes($id)
    {
        try {
            $query = "SELECT CustomerNotes.note from CustomerList INNER JOIN CustomerNotes ON CustomerList.id = :id WHERE CustomerID =:id";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteNote($id)
    {
        try {
            $query = "DELETE FROM CustomerNotes WHERE id = :id";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        } catch(\PDOException $e)
        {
            return $e->getMessage();
        }
    }
}

