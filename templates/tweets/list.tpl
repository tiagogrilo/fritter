{include file='common/header.tpl'}
<div class="wrapper">
    {include file='users/sidebar_profile.tpl'}
    <section id="tweets">

      <header>
        <h2>Tweets</h2>
      </header>

      {if isset($USERNAME)}
      <section id="tweet_form">
        <form action="{$BASE_URL}actions/tweets/tweet.php" method="post">
          <textarea name="tweet" placeholder="Say something"></textarea>
          <input type="submit" value="Freet">
        </form>
      </section>
      {/if}

      <section id="new_tweets"></section>
      
        <div class="container">
          {foreach $tweets as $tweet}
            <article class="tweet">
              <img src="{$BASE_URL}{$tweet.photo}">
              <header>
                <span class="realname">{$tweet.realname}</span>
                <a href="{$BASE_URL}pages/tweets/list_user.php?username={$tweet.username}" class="username">@{$tweet.username}</a>
                <span class="time">{$tweet.time}</span>
              </header>
              <p>{$tweet.text}</p>
            </article>
          {/foreach}
          <p class="pagination">
            <a class="pagination__next" href="page2.html">Next page</a>
          </p>
        </div>
      </div> 
    </section>
{include file='common/footer.tpl'}