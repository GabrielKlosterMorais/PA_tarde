<?php

$query = "SELECT * from livros";
    $result = mysql_query($query);
    while($fetch = mysql_fetch_row($result)){
        echo "<p>". $fetch[0] . " - " . $fetch[1] . " - " . "</p>";
    }
?>
