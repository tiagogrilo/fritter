<!DOCTYPE html>
<html>
  <head>
    <title>Fritter</title>
    <meta charset='utf-8'>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
	  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
    <script src="{$BASE_URL}javascript/main.js"></script>
    <link rel="stylesheet" href="{$BASE_URL}/css/style.css">
    <link rel="icon" href="{$BASE_URL}/images/icon/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <header>
      <div>
        <h1><a href="{$BASE_URL}">Fritter</a></h1>
        {if isset($USERNAME)}
          {include file='common/menu_logged_in.tpl'}
        {else}
          {include file='common/menu_logged_out.tpl'}
        {/if}
      </div>
    </header>

    <section id="messages">
      {if isset($SUCCESS_MESSAGES)}
        {foreach $SUCCESS_MESSAGES as $success}
          <div class="success">{$success} <a class="close" href="#">&#215;</a></div>
        {/foreach}
      {/if}

      {if isset($ERROR_MESSAGES)}
        {foreach $ERROR_MESSAGES as $error}
          <div class="error">{$error} <a class="close" href="#">&#215;</a></div>
        {/foreach}
      {/if}
    </section>
 