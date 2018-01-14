<?php
# Table: files
# Primary key: id
# Foreign key: file_type_id

class File extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Файлы';

    static $belongs_to = array(
        array('file_type')
    );

    static $has_many = array(
        array('albums'),
        array('compositions'),
        array('texts')
    );
}