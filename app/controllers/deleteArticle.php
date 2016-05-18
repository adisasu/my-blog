<?php

class deleteArticle {


function  index() {
    require MODELS . "articles_model.php";
    $articlesModel = new ArticlesModel();
    $article = $articlesModel->deleteArticle($_GET);

      }
  }
