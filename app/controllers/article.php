<?php
require MODELS . "articles_model.php";
require MODELS .  "comments_model.php";

class Article {

    function index() {
      //header('Content-Type: application/json');
      $articlesModel = new ArticlesModel();
      $commentsModel = new CommentsModel();

      $article = $articlesModel->getArticle($_GET["id"]);

      if(isset($_POST) && !empty($_POST)) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $id = $_GET['id'];

        $article = array();

         $article['title'] = $title;
         $article['body'] = $body;
         $article['id'] = $id;
}

        $comments = $commentsModel->getAll();
  

      $pageContent = VIEWS . "article_view.php";

      include VIEWS . "layout_view.php";
    }

    function getArticle() {
        header('Content-Type: application/json');
        $articlesModel = new ArticlesModel();
        $article = $articlesModel->getArticle($_GET['id']);
        //echo json_encode($article);
    }


    function getComments() {
        header('Content-Type: application/json');
        $commentsModel = new CommentsModel();
        $comments = $commentsModel->getAll($_GET['id']);
        //echo json_encode($comments);
    }

    function addComment() {
        header('Content-Type: application/json');
        $commentsModel = new CommentsModel();
        $comment = $commentsModel->addComment($_POST);
        //echo json_encode(array("id"=>$comment));
    }
}
