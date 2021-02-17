<?php
namespace app\models;
use \app\models\BaseModel;
class Order extends \app\models\BaseModel
{
    const TABLENAME = '`order`';
    protected $schema = [
        'id'        => [ 'type' => BaseModel::TYPE_INT],
        'createdAt' => [ 'type' => BaseModel::TYPE_STRING],
        'profile'   => [ 'type' => BaseModel::TYPE_INT],
        'paymethod' => [ 'type' => BaseModel::TYPE_STRING],
        'fullprice' => [ 'type' => BaseModel::TYPE_FLOAT],
    ];
}