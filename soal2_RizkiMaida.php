<?php
    function is_username_valid($username) {
        return preg_match('/^[aiueo]{1}[a-z0-9]{4,8}$/i',$username) ;
    }

    if (is_username_valid("@sony")) {
        echo "true\n";
    } else {
        echo "false\n" ;
    }
     
    if (is_username_valid("Ayu99v")) {
        echo "true" ;
    } else {
        echo "false" ;
    }
?>