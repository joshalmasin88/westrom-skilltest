<?php

namespace Joshua\Test\Classes;

class CustomerNote extends Database {

    public function createNote($CustomerID,$note)
    {
        $query = "INSERT INTO CustomerNotes (note, CustomerID) VALUES (:note, :CustomerID)";
        $stmt = $this->getConnection()->prepare($query);
        $stmt->bindParam(":note", $note);
        $stmt->bindParam(":CustomerID", $CustomerID);
        return $stmt->execute();

    }


    public function getuserNotes($id)
    {
        $query = "SELECT CustomerNotes.note from CustomerList INNER JOIN CustomerNotes ON CustomerList.id = :id WHERE CustomerID =:id";
        $stmt = $this->getConnection()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

