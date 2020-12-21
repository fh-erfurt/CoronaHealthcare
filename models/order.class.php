<?php

class Order extends BaseModel
{
    const TABLENAME = '`order`';
    protected $schema = [
        'id'        => [ 'type' => BaseModel::TYPE_INT],
        'createdAt' => [ 'type' => BaseModel::TYPE_STRING],
        'profile'   => [ 'type' => BaseModel::TYPE_INT],
    ];
}