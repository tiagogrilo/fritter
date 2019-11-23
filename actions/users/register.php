<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if (!$_POST['username'] || !$_POST['realname'] || !$_POST['password'] || !$_POST['email']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  $username = $_POST['username'];
  $realname = $_POST['realname'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $realname = strip_tags($_POST['realname']);
  $username = strip_tags($_POST['username']);
  $email = strip_tags($_POST['email']);

  $photo = $_FILES['photo'];
  $extension = end(explode(".", $photo["name"]));

  try {
    createUser($username, $realname, $password);
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $username . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
  } catch (PDOException $e) {
    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Username already exists';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating user';
 
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }
  
$to      = $email; // Send email to our user
$subject = 'Fritter Signup'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created.
You can login with the following credentials:
 
------------------------
Username: '.$username.'
Password: '.$password.'
------------------------
 
Enjoy Fritter!
 
'; // Our message
					 
$headers = 'From:noreply@fritter.io' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
  
  $_SESSION['success_messages'][] = 'User registered successfully';
  header("Location: $BASE_URL");
?>