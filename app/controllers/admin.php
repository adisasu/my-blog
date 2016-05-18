<?php
  require MODELS . "articles_model.php";
  require MODELS . "comments_model.php";

class Admin {
  function index() {

    move_uploaded_file($_FILES["file"]["tmp_name"], UPLOADS.$_FILES["file"]["name"]);

    $pageContent = "admin_view.php";
    include VIEWS. "layout_view.php";
    }
  function getJson() {
    header('Content-Type: application/json');

    $articlesModel = new ArticlesModel();
    $articles = $articlesModel->getAll();
    echo json_encode($articles);
    }

    function getArticle() {
      header('Content-Type: application/json');

      $articlesModel = new ArticlesModel();
      $article = $articlesModel->getArticle($_GET["id"]);
      echo json_encode($article[0]);
    }

    function updateArticle() {
     header('Content-Type: application/json');

     //Recover PUT method values
   parse_str(file_get_content("php://input"),$PUT);

      $articlesModel = new ArticlesModel();
      $article = $articlesModel->updateArticle($PUT);
      echo json_encode($article);
    }

    function addArticle() {
       header('Content-Type: application/json');

       move_uploaded_file($_FILES["file"]["tmp_name"], UPLOADS.$_FILES["file"]["name"]);

       $articlesModel = new ArticlesModel();
       $article = $articlesModel->addArticle($_POST);
       echo json_encode($article);
    }

    function deleteArticle() {
      header('Content-Type: application/json');

      $articlesModel = new ArticlesModel();
      $article = $articlesModel->deleteArticle($_GET);
      echo json_encode($article);
    }

    function getComment() {
   header('Content-Type: application/json');

   $commentsModel = new CommentsModel();
   $comment = $commentsModel->getComment(($_GET["id"]));
   echo json_encode($comment[0]);
 }

  function download() {
    <?php
require MODELS . "articles_model.php";

class Admin {
    function index() {
        $pageContent = "admin_view.php";
        include VIEWS . "layout_view.php";
    }

    function getJson(){
        header('Content-Type: application/json');

        $articlesModel = new ArticlesModel();
        $articles = $articlesModel->getAll();
        var_dump($articles);
        echo json_encode($articles);
    }

    function getArticle() {
        header('Content-Type: application/json');

        $articlesModel = new ArticlesModel();
        $article = $articlesModel->getArticle($_GET["id"]);
        echo json_encode($article[0]);
    }

    function updateArticle() {
        header('Content-Type: application/json');

        // Recover PUT method values
        parse_str(file_get_contents("php://input"),$PUT);

        $articlesModel = new ArticlesModel();
        $article = $articlesModel->updateArticle($PUT);
        echo json_encode($article);
    }

    function addArticle() {
        header('Content-Type: application/json');

        //var_dump($_FILES);
        //pathinfo($_FILES["file"]["tmp_name"])
        $fileName = md5($_FILES["file"]["size"]).".jpg";
        move_uploaded_file($_FILES["file"]["tmp_name"], UPLOADS.$fileName);

        $articlesModel = new ArticlesModel();
        $_POST["file"] = $fileName;
        $article = $articlesModel->insertArticle($_POST);
        echo json_encode($article);
    }

    function deleteArticle() {
        header('Content-Type: application/json');

        // Recover DELETE method values
        parse_str(file_get_contents("php://input"), $DELETE);

        $articlesModel = new ArticlesModel();
        $article = $articlesModel->deleteArticle($DELETE);
        echo json_encode($article);
      }

    function download() {
        $file_url = UPLOADS.$_GET["file"];
        header("Content-Type: application/octet-stream");
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
        readfile($file_url);
    }
}
  }
}
?>
