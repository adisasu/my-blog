<?php
class Contacts {

  function index() {
    require MODELS . "contact_model.php";
    if(isset($_POST) && !empty($_POST)) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      $contact = array();
       $contact['name'] = $name;
       $contact['email'] = $email;
       $contact['message'] = $message;


    $contactModel = new ContactModel();
    $contact = $contactModel->addContact($contact);

    if(isset($_POST['submit'])) {
      echo "succes";
      }
    }

    $pageContent = VIEWS . "contact_view.php";
    include VIEWS . "layout_view.php";

  }

}
