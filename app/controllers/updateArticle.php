<?php

class updateArticle {


function  index() {
    require MODELS . "articles_model.php";
    $articlesModel = new ArticlesModel();
    $arti = $articlesModel->getArticle($_GET["id"]);

    if(isset($_POST) && !empty($_POST)) {
      $title = $_POST['title'];
      $body = $_POST['body'];
      $id = $_GET['id'];

      $arti = array();

       $arti['title'] = $title;
       $arti['body'] = $body;
       $arti['id'] = $id;



      $arti = $articlesModel->updateArticle($arti);


      }

      $pageContent = VIEWS . "updateArticle_view.php";
      include VIEWS . "layout_view.php";
  }
}
