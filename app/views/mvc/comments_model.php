<?php
require_once "db_model.php";

class CommentsModel extends DB {
    function getAll() {
      $statement = $this->executeQuery("SELECT *
FROM comments
JOIN articles
ON comments.article_id = articles.id;");
     return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
