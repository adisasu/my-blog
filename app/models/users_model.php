<?php
require_once "db_model.php";

class UsersModel extends DB {
  function getAll() {
      $statement = $this->executeQuery("SELECT * FROM users");
      return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  function login($email,$password) {
      $statement = $this->executeQuery("SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'");
      return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  function addUser($user) {
      $this->executeQuery("INSERT into users (username, email, password) values ('".$user["username"]."', '".$user["email"]."', '".$user["password"]."');");
      header('Location:articles');
  }

  function updateArticle($user) {
      $this->executeQuery("UPDATE articles SET email = '".$user["email"]."', password = '".$user["password"]."' WHERE id =".$user["id"]);
      header('Location:articles');

  }

  function deleteUser($user) {
      $this->executeQuery("DELETE FROM users WHERE id = ".$user["id"]);

  }
}
