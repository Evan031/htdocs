<!DOCTYPE html>
<html>

<head>
 
</head>

<body>

    <form action="">
        <input type="text" id="fname" name="fname" onkeyup="showResult(this.value)">
    </form>

    <div id="demo"></div>

    <?php
    $list = array(
        array("Peter", "Griffin", "Oslo", "US"),
        array("Glenn", "Quagmire", "Oslo", "US")
    );

    $file = fopen("contacts.csv", "w");
    // $file = fopen("contacts2" . date("d-m-Y_h:i:sa") . ".csv", "w");

    foreach ($list as $line) {
        fputcsv($file, $line);
    }

    fclose($file);

    // Use this for CSV Export

    // $a=array("red","green");
    // array_push($a,array("blue","yellow"));
    // print_r($a);

    ?>

    <!-- 

    1. bring in assoc array
    2. loop through it and append values to js array
     -->

     <script>
const fruits = ["Banana", "Orange", "Apple", "Mango"];

</script>

<!-- To pass js variables to script it must b below -->
<script type="text/javascript" src="script.js"></script>  


</body>

</html>