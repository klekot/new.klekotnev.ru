<?php
# Table: languages
# Primary key: id

class Language extends \GF\Core\AbstractModel
{
    static $has_many = array(
        array('words')
    );
}