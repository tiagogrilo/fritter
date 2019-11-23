<?php
    session_set_cookie_params(3600, '/~up201305267/fritter/'); //set cookies for this website only
    session_start();
    $BASE_DIR = '/usr/users2/mieec2013/up201305267/public_html/fritter/';
    $BASE_URL = 'https://paginas.fe.up.pt/~up201305267/fritter/';
    $conn = new PDO('pgsql:host=db.fe.up.pt;dbname=siem1944', 'siem1944', 'tipiapagopo');
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
    $smarty = new Smarty;
    $smarty->assign('BASE_URL', $BASE_URL);
    $smarty->template_dir = $BASE_DIR . 'templates/';
    $smarty->compile_dir = $BASE_DIR . 'templates_c/'; 

    if (isset($_SESSION['error_messages'])) {
        $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
        unset($_SESSION['error_messages']);
    }

    if (isset($_SESSION['success_messages'])) {
        $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
        unset($_SESSION['success_messages']);
    }   

    if (isset($_SESSION['form_values'])) {
        $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
        unset($_SESSION['form_values']);
    }

    if (isset($_SESSION['username'])) {
        $smarty->assign('USERNAME', $_SESSION['username']);
    }

    $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
    unset($_SESSION['field_errors']);
 
?>