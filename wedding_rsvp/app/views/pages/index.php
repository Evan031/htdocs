<?php require APPROOT . '/views/inc/header.php' ?>
<?php


// This is where you start, bring this array into the gethint view
// Then run your maniupaltions on it.


$guestArray = $data['guest_array'];

create_session("guest_list", $guestArray);

var_dump($_SESSION["guest_list"]);
?>

<script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "<?php echo URLROOT; ?>/pages/gethint/" + str, true);
            xmlhttp.send();
        }
    }
</script>




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