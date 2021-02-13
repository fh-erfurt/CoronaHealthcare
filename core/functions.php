<?
    function logOut()
    {
        unset($_SESSION['user']);
        setcookie('userId', '', -1 , '/');
        setcookie('password','', -1, '/');
    }


    function rememberMe($id, $password)
    {
        $duration = time() + 3600 * 24 * 30;
        setcookie('userId', $id, $duration, '/');
        setcookie('password', $password, $duration, '/');
    }
?>