<?php
namespace app\models;
use \app\models\BaseModel;

class Profile extends \app\models\BaseModel
{
    const TABLENAME = '`profile`';
    protected $schema = [
        'id'         => [ 'type' => BaseModel::TYPE_INT],
        'createdAt'  => [ 'type' => BaseModel::TYPE_STRING],
        'firstname'  => [ 'type' => BaseModel::TYPE_STRING, 'min' => 2, 'max' => 45],
        'lastname'   => [ 'type' => BaseModel::TYPE_STRING, 'min' => 2, 'max' => 45],
        'phone'      => [ 'type' => BaseModel::TYPE_STRING],
        'email'      => [ 'type' => BaseModel::TYPE_STRING, 'min' => 2],
        'password'   => [ 'type'  => BaseModel::TYPE_STRING, 'min' => 6, 'max' => 45],
        'address'    => [ 'type' => BaseModel::TYPE_INT],
    ];
}