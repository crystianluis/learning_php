<form>

    Name: <input type="text" name="name"><br>
    Date: <input type="date" name="date"><br>
    Confirm: <input type="submit" value="OK">

</form>

<?php

if (isset($_GET)) {

    foreach ($_GET as $key => $value) {
        
        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do Campo: " . $value; 
        echo "<hr>";
    }

}

?>
