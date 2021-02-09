<?php

namespace app\controller;
use \app\models;

class ShopController extends \app\core\Controller
{
    public function actionShop($categoryId = null, $priceMax = null, $priceMin = null)
    {
        if(isset($_GET['categoryId']))
        {
            $categoryId = $_GET['categoryId'];
        }
        if(isset($_GET['priceMax']))
        {
            $priceMax = $_GET['priceMax'];
        }
        if(isset($_GET['priceMin']))
        {
            $priceMin = $_GET['priceMin'];
        }


        $products = \app\models\Product::find();
        $amountOfAllProducts = count($products);
        $filterString = '';

        if(isset($categoryId))
        {
            $currentCategory = \app\models\Category::findOne('id = ' . $categoryId);
            $this->_params['currentCategory'] = $currentCategory['name'];

            $filterString = 'category_id = ' .$categoryId;
            $products = \app\models\Product::find($filterString);
            if(isset($priceMax) || isset($priceMin))
            {
                $filterString .= ' AND ';
            }
        }

        if(isset($priceMax))
        {
            $filterString .= 'price < ' .$priceMax;
            $products = \app\models\Product::find($filterString);
            print_r($filterString);
            if(isset($priceMin))
            {
                $filterString .= ' AND ';
            }
        }

        if(isset($priceMin))
        {
            $filterString .= 'price > ' .$priceMin;
            $products = \app\models\Product::find($filterString);
        }
        $amountOfFilteredProducts = count($products);

        print_r($filterString);
        
        $this->_params['products'] = $products;
        $this->_params['amountOfFilteredProducts'] = $amountOfFilteredProducts;
        $this->_params['amountOfAllProducts'] = $amountOfAllProducts;

    }

    
	public function actionShoppingcart()
	{

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


    public function actionAddProduct()
    {
        $productID = $_POST['productID'];
        $product = \app\models\Product::findOne('id = ' . $productID);
        if (isset($product))
        {
            $_SESSION['product'] = array();
            array_push($_SESSION['product'], $product);
        }
    }
}