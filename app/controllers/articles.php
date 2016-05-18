<?php

require MODELS . "articles_model.php";
require MODELS .  "comments_model.php";

class Articles {
public $page1;

    function index() {


if(isset($_SESSION["email"])){
  echo $_SESSION['email'];

        $articlesModel = new ArticlesModel();

        $art = $articlesModel->getArticlesByLimit();

        $commentsModel = new CommentsModel();
        $comments = $commentsModel->getAll();


        $page =$_GET['page'];

        if($page==""||$page=="1") {
          $page1 = 0;
        } else {
          $page1 = ($page*5)-5;
        }


        $cou = count($art);
        $a = $cou/5;
        $a = ceil($a);

        $articles = $articlesModel->getAll($page1);

        $pageContent = VIEWS . "articles_view.php";

        include VIEWS . "layout_view.php";

        //include "app/views/comments_view.php";
    } else {
      header ("Location:login");
    }
  }

    function addComment() {

      //$commentsModel = new CommentsModel();

        $articleId = $_GET['id'];
        $email = $_POST['email'];
        $body = $_POST['body'];

        $comment = array();
        $comment["article_id"] = $articleId;
         $comment["email"] = $email;
         $comment["body"] = $body;


        $commentsModel = new CommentsModel();
         $commentsModel->addComment($comment);

    $pageContent = VIEWS . "articles_view.php";
    include VIEWS . "layout_view.php";
  }

    function getList() {
      $articlesModel = new ArticlesModel();
      $articles = $articlesModel->getAll();

      $list = "<table>";
      for($i=0;$i<count($articles);$i++) {
        $list.= "<tr><td>".$articles[$i]['title']."</td><td>".$articles[$i]['body']."</td></tr>";

      }
      $list.="</table>";

      echo $list;
    }

    function getComments() {
      $commentsModel = new CommentsModel();
      $comments = $commentsModel->getAll();


      $list = "<table>";
      for($i=0;$i<count($comments);$i++) {
        $list.= "<tr><td>".$comments[$i]['email']."</td><td>".$comments[$i]['body']."</td></tr>";

      }
      $list.="</table>";


      echo $list;

   }


    function getJson() {
      header('Content-Type:application/json');
      $articlesModel = new ArticlesModel();
      $articles = $articlesModel->getAll();

      echo $articles;
    }

    function add() {
      header('Content-Type:application/json');

        $articlesModel = new ArticlesModel();
        $id = $articlesModel -> addArticle($_POST);

        echo json_encode(array("id"=>$id));
    }

    function update() {
      header('Content-Type:application/json');

      $articlesModel = new ArticlesModel();
      $id = $articlesModel -> updateArticle($_POST);

      echo json_encode(array("id"=>$id));
    }

    function delete() {
      header('Content-Type:application/json');

      $articlesModel = new ArticlesModel();
      $id = $articlesModel -> deleteArticle(($_GET["id"]));

      echo json_encode(array("id"=>$id));
    }




}
