<!DOCTYPE html>
<html>
    <body>
        <?php
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "The name is : ".$fullNameValue.".";
        echo "<br></br>";
        echo "the total value is".$totalValue. ".";
        ?>
    </body>
</html>

