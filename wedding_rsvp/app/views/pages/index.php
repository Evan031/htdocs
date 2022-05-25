<?php require APPROOT . '/views/inc/header.php' ?>
<h1><?php echo $data['title']; ?></h1>
<?php foo('whatever'); ?>
<p><?php add(); ?></p>

<!-- 
1. data can be brought through view
2. parsed through to make assoc array
3. assoc array then passed to external "search helper function" via session_start
4. assoc array is used in search functionality 
-->

<?php
$data = [];

$data += ["barfoo" => "test"];
$data += [02 => "foo"];
$data += [03 => "bar"];

$_SESSION["favcolor"] = $data;
?>

<?php var_dump(test_session()) ?>
<?php require APPROOT . '/views/inc/footer.php' ?>