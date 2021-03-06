<?php
require("global.php");
$title = "Reset Password - Alphex";
$tab = "";

if ($_POST["reset"])
{

}

include("templates/header.php");
?>
<div class="container">
  <br>
  <div class="row">
    <div class="col-4 offset-2">
      <h4 class="fancy">Reset Password</h4>
      <hr class="mt-0">
      <?=$sign_in_alert?>
      <form action="" method="post">
        <fieldset class="form-group">
          <input name="email" value="<?=htmlspecialchars($_POST["email"])?>" placeholder="Email" type="email" class="form-control" autofocus>
        </fieldset>
        <fieldset class="form-group">
          <input name="sign_in" type="submit" value="Reset" class="btn btn-primary">
        </fieldset>
      </form>
    </div>
    <div class="col-4">
      <h4 class="fancy">Forgot your password?</h4>
      <hr class="mt-0">
      <p>You can use this form to reset it.<br><br>Once submitted, you will receive an email with further instructions.</p>
    </div>
  </div>
</div>
<?php
include("templates/footer.php");
?>
