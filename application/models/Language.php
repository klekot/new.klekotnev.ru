<?php
# Table: languages
# Primary key: id

class Language extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Языки';

    static $has_many = array(
        array('words')
    );
}