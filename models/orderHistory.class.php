<?php

class OrderHistory extends BaseModel
{
    const TABLENAME = '`orderhistory`';
    protected $schema = [
        'id'            => [ 'type' => BaseModel::TYPE_INT],
        'change'        => [ 'type' => BaseModel::TYPE_STRING],
        'createdAt'     => [ 'type' => BaseModel::TYPE_STRING],
        'order'         => [ 'type' => BaseModel::TYPE_INT]
    ];
}