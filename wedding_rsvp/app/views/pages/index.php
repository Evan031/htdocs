<?php require APPROOT . '/views/inc/header.php' ?>
<?php
$guestArray = [];

foreach ($data['guest_info'] as $guests) {
    $guestArray += [intval($guests->id) => $guests->name .' '. $guests->surname];
}

// $_SESSION["guest_list"] = $guestArray;
?>

<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "<?php echo URLROOT; ?>/pages/gethint/" + str, true);
        xmlhttp.send();
    }
}
</script>


<!-- 
http://localhost:83/wedding_rsvp/pages/gethint?q=Evan 

http://localhost:83/wedding_rsvp/pages/gethint.php
-->
<!-- 
1. data can be brought through view
2. parsed through to make assoc array
3. assoc array then passed to external "search helper function" via session_start
4. assoc array is used in search functionality 
5. brought back in search results
6. links used with url parameter
-->


<!-- <input type="text" id="fname" name="fname" value="John"> -->
<form action="">
<input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>

<?php
// $data = [];

// $data += ["barfoo" => "test"];
// $data += [02 => "foo"];
// $data += [03 => "bar"];

// $_SESSION["favcolor"] = $data;







?>



<ul>
    <span id="txtHint"></span>
</ul>

<?php require APPROOT . '/views/inc/footer.php' ?>