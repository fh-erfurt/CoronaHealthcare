<?php


class Category extends BaseModel
{
    const TABLENAME = '`category`';
    protected $schema = [
        'id'            => [ 'type' => BaseModel::TYPE_INT],
        'name'          => [ 'type' => BaseModel::TYPE_STRING, 'max' => 50]
    ];
}