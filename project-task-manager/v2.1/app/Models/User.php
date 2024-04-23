<?php namespace TaskManager\Models;

use TaskManager\System\Model;

class User extends Model{
    public string $table = 'users';
    public bool $softDelete = true;
}