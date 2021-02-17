<?php

namespace app\controller;
use \app\models;

class ShopController extends \app\core\Controller
{
    public function actionShop($categoryId = null, $priceMax = null, $priceMin = null)
    {
        $db = $GLOBALS['db'];
        if(isset($_GET['categoryId']))
        {
            $categoryId = $_GET['categoryId'];
        }
        if(isset($_POST['categoryId']))
        {
            $categoryId = $_POST['categoryId'];
        }
        if(isset($_POST['name']))
        {
            $productName = $_POST['name'];
        }
        if(isset($_POST['priceMax']))
        {
            $priceMax = $_POST['priceMax'];
        }
        if(isset($_POST['priceMin']))
        {
            $priceMin = $_POST['priceMin'];
        }

        
        $products = \app\models\Product::find();
        $amountOfAllProducts = count($products);
        $filterString = '';

        $highestPrice = 0;
        foreach ($products as $key=>$product) {
            if ($product['price'] > $highestPrice) {
                $highestPrice = $product['price'] + 1;
            }
        }

        $lowestPrice = 10000;
        foreach ($products as $key=>$product) {
            if ($product['price'] < $lowestPrice) {
                $lowestPrice = $product['price'];
            }
        }   


        if(!empty($categoryId))
        {
            $currentCategory = \app\models\Category::findOne('id = ' . $categoryId);
            $this->_params['currentCategory'] = $currentCategory['name'];

            $filterString = 'category_id = ' .$categoryId;
            $products = \app\models\Product::find($filterString);
            if(isset($priceMax) || isset($priceMin) || isset($productName))
            {
                $filterString .= ' AND ';
            }
        }

        if(isset($productName))
        {
            $filterString .= 'name LIKE ' .$db->quote('%'.$productName.'%');
            $products = \app\models\Product::find($filterString);
            if(isset($priceMax) || isset($priceMin))
            {
                $filterString .= ' AND ';
            }
        }

        if(isset($priceMax))
        {
            $filterString .= 'price <= ' .$priceMax;
            $products = \app\models\Product::find($filterString);
            if(isset($priceMin))
            {
                $filterString .= ' AND ';
            }
        }

        if(isset($priceMin))
        {
            $filterString .= 'price >= ' .$priceMin;
            $products = \app\models\Product::find($filterString);
        }
        $amountOfFilteredProducts = count($products);
  

        $this->_params['highestPrice'] = $highestPrice;
        $this->_params['lowestPrice'] = $lowestPrice;
        $this->_params['products'] = $products;
        $this->_params['amountOfFilteredProducts'] = $amountOfFilteredProducts;
        $this->_params['amountOfAllProducts'] = $amountOfAllProducts;
        $this->_params['categories'] = \app\models\Category::findOrderBy('name');

    }

    
	public function actionShoppingcart()
	{
        $fullPrice = 0;
        if(!empty($_SESSION['shoppingcart']))
        {
            foreach ($_SESSION['shoppingcart'] as $key => $product) 
            {
                $fullPrice += $product['price'];
            }
            $this->_params['shoppingcart'] = $_SESSION['shoppingcart'];
            $this->_params['fullPrice'] = $fullPrice;
        }
	}


    public function actionProduct()
    {
        $productID = $_GET['productID'];
        $product = \app\models\Product::findOne('id = ' . $productID);
        $this->_params['product'] = $product;
        $this->_params['productID'] = $product['id'];
        $this->_params['productName'] = $product['name'];
        $this->_params['productPrice'] = $product['price'];
        $this->_params['productPicture'] = $product['picturepath'];
        $this->_params['productDescription'] = $product['description'];
    }

    public function actionDeleteProduct()
    {
        unset($_SESSION['shoppingcart'][$_POST['productID']]);
        $this->redirect('index.php?c=shop&a=shoppingcart');
    }


    public function actionAddProduct()
    {
        
        $productID = $_POST['productID'];
        $product = \app\models\Product::findOne('id = ' . $productID);
        if (isset($product))
        {
            if (empty($_SESSION['shoppingcart']))
            {
                $_SESSION['shoppingcart'] = array();
            }
            array_push($_SESSION['shoppingcart'], $product);
        }
    }


    public function actionOrder()
    {
        if(!isset($_SESSION['user']))
        {
            $this->redirect('index.php?c=login&a=login&wantedToOrder=yes');
        }
        $fullPrice = 0;
        if(!empty($_SESSION['shoppingcart']))
        {
            foreach ($_SESSION['shoppingcart'] as $key => $product) 
            {
                $fullPrice += $product['price'];
            }
            $this->_params['shoppingcart'] = $_SESSION['shoppingcart'];
            $this->_params['fullPrice'] = $fullPrice;
        }
    }

    public function actionFinishOrder()
    {
        $user = $_SESSION['user'];
        $products = $_SESSION['shoppingcart'];
        $orderData = array(
            'profile' => $user['id'],
            'paymethod' => $_POST['paymethod'],
            'fullprice' => $_POST['fullprice'],
        );
        $newOrder = new \app\models\Order($orderData);
        $newOrder->insert($errors);
        $orderID = \app\models\Order::findLastEntryPerID('id');
        $orderHistoryDate = array(
            'change' => 'Bezahlung ausstehend',
            'order'  => $orderID
        );
        $newOrderHistory = new \app\models\OrderHistory($orderHistoryDate);
        $newOrderHistory->insert($errors);

        foreach ($products as $key => $product) {
            $newOrderProductMappingData = array(
                'product_id' => $product['id'],
                'order_id'   => $orderID
            );
            $newOPMapping = new \app\models\OrderProductMapping($newOrderProductMappingData);
            $newOPMapping->insert($errors);
        }


        unset($_SESSION['shoppingcart']);
        $this->redirect('index.php?c=shop&a=success');
    }

    public function actionSuccess()
    {

    }
}