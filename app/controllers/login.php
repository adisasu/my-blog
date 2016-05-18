<?php
    class Login {
        function index() {

            if (isset($_POST["email"]) && isset($_POST["password"])) {
                require "app/models/users_model.php";
                $usersModel = new UsersModel();
                $user = $usersModel->login($_POST["email"], $_POST["password"]);
                $_SESSION["email"] = $_POST["email"];
                if (is_array($user) && !empty($user)) {
                    header("Location: articles");

                }
                else {
                    echo "Wrong email or password";
                }

            }



    // if(isset($_GET["logout"])) {
    //     //echo "LOGOUT";
    //     unset($_SESSION["email"]);
    //     session_destroy();
    //       header("Location: login");
    //     //var_dump($_SESSION);
    //     //exit;
    // }


            $pageContent = VIEWS . "login_view.php";

            include VIEWS . "layout_view.php";
        }

    }
?>
