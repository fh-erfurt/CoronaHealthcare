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


    function getProductname($productID)
    {
        $product = \app\models\Product::find('id= '. $productID);
        $productName = $product[0]['name'];
        return $productName;
    }
?>