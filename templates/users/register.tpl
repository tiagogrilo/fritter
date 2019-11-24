{include file='common/header.tpl'}

<section id="register">
  <h2>Create your account</h2>

  <form action="{$BASE_URL}actions/users/register.php" method="post" enctype="multipart/form-data">
    <input type="text" 
           name="realname" 
           value="{if isset($FORM_VALUES)}{$FORM_VALUES.realname}{/if}"
           placeholder="Name">
    <span class="field_error">{$FIELD_ERRORS.username}</span>
    <input type="text" 
           name="username" 
           value="{if isset($FORM_VALUES)}{$FORM_VALUES.username}{/if}"
           placeholder="Username">
       <input type="email" 
              name="email" 
              value="{if isset($FORM_VALUES)}{$FORM_VALUES.email}{/if}"
              placeholder="Email">
    <input type="password" 
           name="password" 
           value="" 
           placeholder="Password">
    <div  class="photo-upload">
      <label>Photo: <input type="file" name="photo">
      </label>
    </div>
    <input type="submit" value="Register">
  </form>

</section>

{include file='common/footer.tpl'}