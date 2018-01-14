<?php
# Table: ideas
# Primary key: id

class Idea extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Идеи';

    static $has_many = array(
        array('words')
    );

}