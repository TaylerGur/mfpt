<?php



    $query = mysqli_query( $db, "INSERT INTO contact_message(name,e_mail,site,text) VALUES('$name','$e_mail','$site','$text')");

    // mysqli_free_result($query);

    return true;


?>