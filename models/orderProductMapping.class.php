<?php
namespace app\models;
use \app\models\BaseModel;

class OrderProductMapping extends \app\models\BaseModel
{
    const TABLENAME = '`orderproductmapping`';
    protected $schema = [
        'order_id'       => [ 'type' => BaseModel::TYPE_INT],
        'product_id'     => [ 'type' => BaseModel::TYPE_INT]
    ];
}