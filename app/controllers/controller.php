<?php
class Controller {
    function __construct() {
        // all pages from my blog
        $pages = array (
            "articles" => array("path" => "articles.php", "class" => "Articles"),
            "article" => array("path" => "article.php", "class" => "Article"),
            "contact" => array("path" => "contact.php", "class" => "Contacts"),
            "addArticle" => array("path" => "addArticle.php", "class" =>"addArticle"),
            "addComment" => array("path" => "addArticle.php", "class" =>"addComment"),
            "updateArticle" => array("path" => "updateArticle.php", "class" => "updateArticle"),
            "admin" => array("path" => "admin.php", "class" => "admin"),
            "deleteArticle" => array("path" => "deleteArticle.php", "class" => "deleteArticle"),
            "register" => array("path" => "register.php", "class" => "register"),
            "login" => array("path" => "login.php", "class" => "login")
        );

        // blog/articles/add
        $uri = $_SERVER["PATH_INFO"];
        $segments = explode("/", $uri);

        $page = "articles";
        $page = "article";
        $page = "contact";
        $page = "addArticle";
        $page = "addComment";
        $page = "updateArticle";
        $page = "deleteArticle";
        $page = "register";
        $page = "login";



        $controller = $segments[1];
        $method = empty($segments[2]) ? "" : $segments[2] ;

        if(!empty($controller) && $controller != "index.php") {
            if (array_key_exists($controller, $pages))              {
                $page = $controller;
            }
            else {
              http_response_code(404);
                echo "NOT FOUND";
                exit;
            }
        }

        require $pages[$page]["path"];
        $controllerClass = new $pages[$page]["class"]();
        if (!empty($method) && method_exists($page, $method)) {
            $controllerClass->$method();
        }
        else {
            $controllerClass->index();
        }

    }
}
