<?php
namespace app\models;
use \app\models\BaseModel;
class OrderHistory extends \app\models\BaseModel
{
    const TABLENAME = '`orderhistory`';
    protected $schema = [
        'order_id'       => [ 'type' => BaseModel::TYPE_INT],
        'product_id'     => [ 'type' => BaseModel::TYPE_INT]
    ];
}