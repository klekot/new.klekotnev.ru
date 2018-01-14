<?php
# Table: record_types
# Primary key: id

class RecordType extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Типы записей';

    static $has_many = array(
        array('records')
    );
}