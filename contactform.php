<form method="post" action="contactform.php">
  <textarea name="message"></textarea>
  <input type="submit">
</form>

<?php 

if ($_POST["message"]) {
  mail("hannahhmcgowan@gmail.com", "here is the subject", $_POST["insert message here"]. "from: an@gmail.address");
}

?> 

