<?php
namespace app\models;
use \app\models\BaseModel;

class Product extends \app\models\BaseModel
{
    const TABLENAME = '`product`';
    protected $schema = [
        'id'            => [ 'type' => BaseModel::TYPE_INT],
        'description'   => [ 'type' => BaseModel::TYPE_STRING],
        'name'          => [ 'type' => BaseModel::TYPE_STRING],
        'price'         => [ 'type' => BaseModel::TYPE_FLOAT],
        'picturepath'   => [ 'type' => BaseModel::TYPE_STRING],
        'category_id'   => [ 'type' => BaseModel::TYPE_INT]
    ];
}