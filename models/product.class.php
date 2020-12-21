<?php


class Product extends BaseModel
{
    const TABLENAME = '`product`';
    protected $schema = [
        'id'            => [ 'type' => BaseModel::TYPE_INT],
        'description'   => [ 'type' => BaseModel::TYPE_STRING],
        'name'          => [ 'type' => BaseModel::TYPE_STRING],
        'price'         => [ 'type' => BaseModel::TYPE_FLOAT],
    ];
}