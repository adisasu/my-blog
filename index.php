<?php

session_start();

if(isset($_GET["logout"])) {
    //echo "LOGOUT";
    unset($_SESSION["email"]);
    session_destroy();
      header("Location: login");
    }

define("BASE_URL", "http://localhost/blogg/");
define("MODELS", "app/models/");
define("VIEWS", "app/views/");
define("CSS", "public/css/");

define("UPLOADS", "uploads/");

require "app/controllers/controller.php";
new Controller();
