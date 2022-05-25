<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="script.js"></script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>
<p>Suggestions:</p>
<ul>
<span id="txtHint"></span>
</ul>

<?php

$data = [];

$data += ["barfoo" => "test"];
$data += [02 => "foo"];
$data += [03 => "bar"];

var_dump($data);

?>

</body>
</html>