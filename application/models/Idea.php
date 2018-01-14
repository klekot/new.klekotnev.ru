<?php
# Table: ideas
# Primary key: id

class Idea extends \GF\Core\AbstractModel
{
    static $has_many = array(
        array('words')
    );

}