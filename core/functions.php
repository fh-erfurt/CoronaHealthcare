<?
    function logOut()
    {
        unset($_SESSION['user']);
        session_destroy();
    }
    ?>