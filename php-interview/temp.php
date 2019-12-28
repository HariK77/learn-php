<?php

class First {
}

class Second {

}

class Third extends Second {

}

class Fourth {

}

function checkObject( $obj ) {
    //----------DO NOT MODIFY CODE ABOVE THIS ROW, IT WILL ANYWAY BE RESET BEFORE EXECUTION----------
    
    if ( is_object( $obj ) && ( $obj instanceof Second || $obj instanceOf First ) ) {
        return true;
    }
    return false;

    //----------DO NOT MODIFY CODE BELOW THIS ROW, IT WILL ANYWAY BE RESET BEFORE EXECUTION----------
}

?>