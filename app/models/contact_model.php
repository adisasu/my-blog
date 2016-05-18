<?php
require_once "db_model.php";

class ContactModel extends DB {
    function getAll() {
        $statement = $this->executeQuery("SELECT * FROM contact");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    function addContact($contact) {
        $this->executeQuery("INSERT into contacts (name,email, message) values ('".$contact["name"]."', '".$contact["email"]."', '".$contact["message"]."');");
        echo "succes";
    }
}
