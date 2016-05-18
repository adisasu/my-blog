<?php

require MODELS . "users_model.php";

class Register {

function index() {

if (isset($_POST) && !empty($_POST)) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  if ($password === $password2) {
    $hash = password_hash($password, PASSWORD_BCRYPT);

    $user = array();
    $user['username'] = $username;
    $user['email'] = $email;
    $user['password'] = $hash;

    $usersModel = new UsersModel();
    $users = $usersModel->addUser($user);
    echo 'There were inserted ' . $inserted . ' records';


  }
 }
 $pageContent = VIEWS . "register_view.php";

 include VIEWS . "layout_view.php";

}
}
