<?php

class addComment {

  function index() {
    require MODELS . "comments_model.php";

    if(isset($_POST) && !empty($_POST)) {
      $articleId = $_POST['articleid'];
      $email = $_POST['email'];
      $body = $_POST['body'];

      $comment = array();
      $comment['articleid'] = $articleId;
       $comment['email'] = $email;
       $comment['body'] = $body;


    $commentsModel = new CommentsModel();

    $comment = $commentsModel->addComment($comment);

    }

    $pageContent = VIEWS . "articles_view.php";
    include VIEWS . "layout_view.php";
  }
}


?>
