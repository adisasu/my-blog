<?php
require_once "db_model.php";

class ArticlesModel extends DB {
    function getAll() {
        $statement = $this->executeQuery("SELECT * FROM articles");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    function getArticle($id) {
        $statement = $this->executeQuery("SELECT * FROM articles WHERE id = " . $id);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    function addArticle($article) {
        $this->executeQuery("INSERT into articles (title, body) values ('".$article["title"]."', '".$article["body"]."');");
        header('Location:articles');
    }

    function updateArticle($article) {
        $this->executeQuery("UPDATE articles SET title ='".$article["title"]."',body = '".$article["body"]."' WHERE id =".$article["id"]);
        header('Location:articles');

    }

    function deleteArticle($article) {
        $this->executeQuery("DELETE FROM articles WHERE id = ".$article["id"]);

    }
}
