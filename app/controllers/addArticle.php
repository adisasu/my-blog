<?php

class addArticle {

  function index() {

    require MODELS . "articles_model.php";
    if(isset($_POST) && !empty($_POST)) {
      $title = $_POST['title'];
      $body = $_POST['body'];


      $arti = array();
       $arti['title'] = $title;
       $arti['body'] = $body;

          if (!empty($_FILES["file"])) {
           //get file name
           $fileName = $_FILES["file"]['name'];
           //get file extension
           $ext = pathinfo($fileName, PATHINFO_EXTENSION);
           //if picture
           if (($ext == 'jpg') || ($ext == 'jpeg') || ($ext == 'png') || ($ext == 'gif')) {
             move_uploaded_file($_FILES["file"]["tmp_name"], UPLOADS.$fileName);
             // hash filename and concatenate the extension
             $fileNameHashed = md5_file(UPLOADS.$fileName) . '.' . $ext;
             rename(UPLOADS.$fileName, UPLOADS.$fileNameHashed);
             $arti["image"] = $fileNameHashed;
           } else {
             http_response_code(500);
             echo "wrong filetype";
             return;
           }


       }

    $articlesModel = new ArticlesModel();

    $arti = $articlesModel->addArticle($arti);

    }

    $pageContent = VIEWS . "addArticle_view.php";
    include VIEWS . "layout_view.php";

  }



}
