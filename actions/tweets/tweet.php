<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/tweets.php');  

  if (!$_SESSION['username']) {
    $_SESSION['error_messages'][] = 'Not allowed!';
    header("Location: $BASE_URL");
    exit;
  }

  if (!$_POST['tweet']) {
    $_SESSION['error_messages'][] = 'You didn\'t say anything';
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_SESSION['username'];
  $tweet = $_POST['tweet'];

  try {
    createTweet($username, strip_tags($tweet))  ;
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Error creating freet';

    $_SESSION['form_values'] = $_POST;
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
  }
  $_SESSION['success_messages'][] = 'Freet sent';  
  header("Location: " . $_SERVER['HTTP_REFERER']);
?>