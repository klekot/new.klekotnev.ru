<?php
# Table: roles
# Primary key: id

class Role extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Роли пользователей';

    static $has_many = array(
        array('users')
    );

    const ROLE_ADMIN = 1;
    const ROLE_USER  = 2;
}