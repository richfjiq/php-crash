<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
  echo '<h3>' . $_GET['name'] . '</h3>';
  echo '<h3>' . $_GET['password'] . '</h3>';
} 
echo $_GET['name'];
echo $_GET['age'];
?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">Link</a>

<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
  <label>Password: </label>
  <input type="password" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>