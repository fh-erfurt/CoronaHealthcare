<?php
namespace app\models;
use \app\models\BaseModel;

class Address extends \app\models\BaseModel
{
    const TABLENAME = '`address`';
    protected $schema = [
        'id'        => [ 'type' => BaseModel::TYPE_INT],
        'city'      => [ 'type' => BaseModel::TYPE_STRING],
        'street'    => [ 'type' => BaseModel::TYPE_STRING],
        'number'    => [ 'type' => BaseModel::TYPE_STRING],
        'zip'       => [ 'type' => BaseModel::TYPE_STRING],
    ];
}