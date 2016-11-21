<?php
class sanitize {
  public function sanitizeEmail($name) {
    if(isset($_POST[$name])) {
      return filter_var($_POST[$name], FILTER_SANITIZE_EMAIL);
    }
  }
}
class validate {
  public function validateEmail($name) {
    $email = filter_var($_POST[$name], FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return TRUE;
    } else {
      return FALSE;
    }

  }

  }

$sanitize = new sanitize();
echo $sanitize->sanitizeEmail('email');
echo '<br>';

$validate = new validate();
echo '<br>';
if($validate->validateEmail('email')) {
  echo 'The email is valid';
}

?>
