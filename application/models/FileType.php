<?php
# Table: file_types
# Primary key: id

class FileType extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Типы файлов';

    static $has_many = array(
        array('files')
    );
}