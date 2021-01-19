<?php
namespace app\models;
use \app\models\BaseModel;

class Category extends \app\models\BaseModel
{
    const TABLENAME = '`category`';
    protected $schema = [
        'id'            => [ 'type' => BaseModel::TYPE_INT],
        'name'          => [ 'type' => BaseModel::TYPE_STRING, 'max' => 50]
    ];
}