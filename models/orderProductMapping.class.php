<?php

class OrderHistory extends BaseModel
{
    const TABLENAME = '`orderhistory`';
    protected $schema = [
        'order_id'       => [ 'type' => BaseModel::TYPE_INT],
        'product_id'     => [ 'type' => BaseModel::TYPE_INT]
    ];
}