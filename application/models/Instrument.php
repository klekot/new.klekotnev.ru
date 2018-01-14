<?php
# Table: instruments
# Primary key: id

class Instrument extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Инструменты';

    static $has_many = array(
        array('musician_records')
    );
}